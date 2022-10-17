<?php

namespace App\Tests\Controller\Task;

use App\Entity\User;
use App\Repository\TaskRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user, $userTwo;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
    $this->userTwo = $userRepository->findOneByEmail('test@gmail.com');
  }

  public function testEditTask(): void
  {
    $this->client->loginUser($this->user);
    $task = $this->user->getTasks()->first();

    $crawler = $this->client->request('GET', '/tasks/' . $task->getId() . '/edit');

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

    $this->assertSame('Title', $crawler->filter('label[for="task_title"]')->text());
    $this->assertEquals(1, $crawler->filter('input[name="task[title]"]')->count());

    $this->assertSame('Content', $crawler->filter('label[for="task_content"]')->text());
    $this->assertEquals(1, $crawler->filter('textarea[name="task[content]"]')->count());

    $form = $crawler->selectButton('editTask')->form();
    $form['task[title]'] = 'Test nouveau';
    $form['task[content]'] = 'Task nouveau';
    $this->client->submit($form);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-success')->count());
    $this->assertEquals(1, $crawler->filter('h5:contains("Test nouveau")')->count());
  }

  public function testEditTaskAnotherUser(): void
  {
    $this->client->loginUser($this->user);
    $task = $this->userTwo->getTasks()->first();

    $this->client->request('GET', '/tasks/' . $task->getId() . '/edit');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-danger')->count());
  }

  public function testEditWrongId(): void
  {
    /** @var TaskRepository */
    $tasksRepository = static::getContainer()->get(TaskRepository::class);
    $tasks = $tasksRepository->findAll();
    $task = end($tasks);
    $id = $task->getId();
    $id = $id + 10;

    $this->client->loginUser($this->user);
    $this->client->request('GET', '/tasks/' . $id . '/edit');

    $this->assertEquals(404, $this->client->getResponse()->getStatusCode());
  }
}
