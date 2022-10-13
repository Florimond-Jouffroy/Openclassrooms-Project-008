<?php

namespace App\Tests\Controller\User;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{

  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  public function testRegistrationUser(): void
  {
    $crawler = $this->client->request('GET', '/users/create');

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

    $form = $crawler->selectButton('addUser')->form();
    $form['registration[username]'] = 'test';
    $form['registration[password][first]'] = 'admin';
    $form['registration[password][second]'] = 'admin';
    $form['registration[email]'] = 'test@test.com';
    $form['registration[roles][0]']->tick();

    $this->client->submit($form);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('label:contains("Email address")')->count());
  }
}
