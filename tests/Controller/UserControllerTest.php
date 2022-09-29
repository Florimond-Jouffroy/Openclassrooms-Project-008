<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  public function testListUser(): void
  {
    $this->client->loginUser($this->user);

    $this->client->request('GET', '/users');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
  }

  public function testCreateUser(): void
  {
    $crawler = $this->client->request('GET', '/users/create');
    $form = $crawler->selectButton('addUser')->form();

    $this->client->submit($form, [
      'registration[username]' => 'test',
      'registration[password][first]' => 'admin',
      'registration[password][second]' => 'admin',
      'registration[email]' => 'test@test.com'
    ]);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(0, $crawler->filter('td:contains("test@test.com")')->count());
  }

  public function testEditUser(): void
  {
    $userRepository = static::getContainer()->get(UserRepository::class);

    $user = $userRepository->findOneByEmail('florimond@gmail.com');
    $id = $user->getId();

    $crawler = $this->client->request('GET', '/users/' . $id . '/edit');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $form = $crawler->selectButton('editUser')->form();

    $this->client->submit($form, [
      'registration[username]' => 'nouveau',
      'registration[password][first]' => 'nouveau',
      'registration[password][second]' => 'nouveau',
      'registration[email]' => 'nouveau@nouveau.com'
    ]);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(0, $crawler->filter('td:contains("nouveau@nouveau.com")')->count());
  }
}
