<?php

namespace App\Tests\Controller\Admin\User;

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

  public function testAdminTaskIndex()
  {
    $this->client->loginUser($this->admin);

    $crawler = $this->client->request('GET', '/admin/users');

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('table.table')->count());
  }

  public function testAdminTaskIndexNotAdmin()
  {
    $this->client->loginUser($this->user);

    $this->client->request('GET', '/admin/users');
    $this->assertEquals(403, $this->client->getResponse()->getStatusCode());
  }
}
