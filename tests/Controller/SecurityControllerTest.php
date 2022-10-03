<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  // Test sur la connexion d'un utilisateur
  public function testLogin(): void
  {
    $crawler = $this->client->request('GET', '/login');
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Email address")')->count());

    $form = $crawler->selectButton('login')->form();
    $this->client->submit($form, ['_username' => 'florimond@gmail.com', '_password' => 'admin']);
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Se déconnecter")')->count());
  }

  // Test sur la déconnexion d'un utilisateur
  public function testLogout(): void
  {
    $this->client->loginUser($this->user);

    $this->client->request('GET', '/logout');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
  }
}
