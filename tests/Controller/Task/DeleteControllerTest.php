<?php

namespace App\Tests\Controller\Task;

use App\Entity\User;
use App\Repository\TaskRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DeleteControllerTest extends WebTestCase
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

  public function testTaskDelete()
  {
    $this->client->loginUser($this->user);
    $task = $this->user->getTasks()->first();

    $this->client->request('GET', '/tasks/' . $task->getId() . '/delete');

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-success')->count());
  }

  public function testTaskDeleteAnotherUser()
  {
    $this->client->loginUser($this->user);
    $task = $this->userTwo->getTasks()->first();

    $this->client->request('GET', '/tasks/' . $task->getId() . '/delete');

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-danger')->count());
  }

  public function testTaskDeleteWrongId()
  {
    /** @var TaskRepository */
    $tasksRepository = static::getContainer()->get(TaskRepository::class);
    $tasks = $tasksRepository->findAll();
    $task = end($tasks);
    $id = $task->getId();
    $id = $id + 10;

    $this->client->loginUser($this->user);
    $this->client->request('GET', '/tasks/' . $id . '/delete');

    $this->assertEquals(404, $this->client->getResponse()->getStatusCode());
  }
}
