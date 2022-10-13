<?php

namespace App\Tests\Controller\Task;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ToggleControllerTest extends WebTestCase
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

  public function testTaskToggle(): void
  {
    $this->client->loginUser($this->user);

    $task = $this->user->getTasks()->first();

    $this->client->request('GET', '/tasks/' . $task->getId() . '/toggle');

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-success')->count());
  }

  public function testTaskToggleAnotherUser(): void
  {
    $this->client->loginUser($this->user);
    $task = $this->userTwo->getTasks()->first();

    $this->client->request('GET', '/tasks/' . $task->getId() . '/toggle');

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-danger')->count());
  }
}
