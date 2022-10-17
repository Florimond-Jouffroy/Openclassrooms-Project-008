<?php

namespace App\Tests\Controller\Task;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreateControllerTest extends WebTestCase
{

  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  public function testCreateTaskNotLogged(): void
  {
    $this->client->request('GET', '/tasks/create');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
  }



  public function testCreateTask(): void
  {
    $this->client->loginUser($this->user);

    $crawler = $this->client->request('GET', '/tasks/create');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

    $this->assertSame('Title', $crawler->filter('label[for="task_title"]')->text());
    $this->assertEquals(1, $crawler->filter('input[name="task[title]"]')->count());

    $this->assertSame('Content', $crawler->filter('label[for="task_content"]')->text());
    $this->assertEquals(1, $crawler->filter('textarea[name="task[content]"]')->count());

    $form = $crawler->selectButton('addTask')->form();
    $form['task[title]'] = 'Test CreateTask';
    $form['task[content]'] = 'Task Content';
    $this->client->submit($form);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-success')->count());
    $this->assertEquals(1, $crawler->filter('h5:contains("Test CreateTask")')->count());
  }
}
