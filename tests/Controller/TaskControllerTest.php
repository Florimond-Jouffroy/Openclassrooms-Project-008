<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  public function testTaskNotLogged(): void
  {

    $this->client->request('GET', '/tasks');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Email :")')->count());
  }

  public function testTaskListLogged(): void
  {
    $this->client->loginUser($this->user);
    $crawler = $this->client->request('GET', '/tasks');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Créer une tâche")')->count());
  }

  public function testCreateTaskNotLogged(): void
  {
    $this->client->request('GET', '/tasks/create');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Email :")')->count());
  }

  public function testCreateTask(): void
  {
    $this->client->loginUser($this->user);
    $crawler = $this->client->request('GET', '/tasks/create');
    $form = $crawler->selectButton('addTask')->form();
    $this->client->submit($form, ['task[title]' => 'Test CreateTask', 'task[content]' => 'Tache content']);
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Test CreateTask")')->count());
  }


  public function testToggleTaskAction(): void
  {
    $this->client->loginUser($this->user);
    $crawler = $this->client->request('GET', '/tasks');
    $this->assertGreaterThan(0, $crawler->filter('div:contains("task toggle")')->count());

    $form = $crawler->filter('div:contains("task toggle")')->selectButton('toggleTask')->form();
    $this->client->submit($form, []);
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $newCrawler = $crawler->filter('div:contains("task toggle")');
    $this->assertGreaterThan(0, $newCrawler->filter('button:contains("Marquer non terminée")')->count());
  }

  public function testTaskDelete(): void
  {
    $this->client->loginUser($this->user);

    $crawler = $this->client->request('GET', '/tasks');
    $this->assertGreaterThan(0, $crawler->filter('div:contains("task delete")')->count());

    $form = $crawler->filter('div.task:contains("task delete")')->selectButton('deleteTask')->form();
    $this->client->submit($form, []);
    $crawler = $this->client->followRedirect();
    $this->assertEquals(0, $crawler->filter('div:contains("task delete")')->count());
  }
}
