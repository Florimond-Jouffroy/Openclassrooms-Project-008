<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user;
  private User $admin;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
    $this->admin = $userRepository->findOneByEmail('admin@gmail.com');
  }

  // Test sur la page d'accueil sans etre connecter
  public function testIndexNotLogged(): void
  {
    $this->client->request('GET', '/');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Email address")')->count());
  }

  // Test sur la page d'accueil en etant connecter
  public function testIndexLogged(): void
  {
    $this->client->loginUser($this->user);

    $crawler = $this->client->request('GET', '/');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Se déconnecter")')->count());
  }

  public function testIndexAdminLogged()
  {
    $this->client->loginUser($this->admin);

    $crawler = $this->client->request('GET', '/');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Administration")')->count());
  }
}
