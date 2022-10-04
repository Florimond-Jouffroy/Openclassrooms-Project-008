<?php

namespace App\Tests\Controller\User;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  public function testLogin(): void
  {
    $crawler = $this->client->request('GET', '/login');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('label:contains("Email address")')->count());

    $form = $crawler->selectButton('login')->form();
    $form['_username'] = 'florimond@gmail.com';
    $form['_password'] = 'admin';
    $this->client->submit($form);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('a:contains("Se déconnecter")')->count());
  }

  public function testLogout(): void
  {
    $this->client->loginUser($this->user);

    $this->client->request('GET', '/logout');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $this->client->followRedirect();
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('label:contains("Email address")')->count());
  }
}
