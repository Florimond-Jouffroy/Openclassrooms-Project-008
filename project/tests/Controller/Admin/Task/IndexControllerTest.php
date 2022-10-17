<?php

namespace App\Tests\Controller\Admin\Task;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user, $admin;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
    $this->admin = $userRepository->findOneByEmail('admin@gmail.com');
  }

  public function testAdminTaskIndex(): void
  {
    $this->client->loginUser($this->admin);

    $crawler = $this->client->request('GET', '/admin/tasks');

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.tasks')->count());
  }

  public function testAdminTaskIndexNotAdmin(): void
  {
    $this->client->loginUser($this->user);

    $this->client->request('GET', '/admin/tasks');
    $this->assertEquals(403, $this->client->getResponse()->getStatusCode());
  }
}
