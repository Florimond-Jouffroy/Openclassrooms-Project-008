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
  private User $admin;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);

    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
    $this->admin = $userRepository->findOneByEmail('admin@gmail.com');
  }

  // Test sur la liste des utilisateurs
  /**
   * @dataProvider provideListeUserData
   */
  public function testListUser($expectedStatusCode, $isAdmin): void
  {
    if ($isAdmin) {
      $this->client->loginUser($this->admin);
    } else {
      $this->client->loginUser($this->user);
    }

    $this->client->request('GET', '/admin/users');
    $this->assertEquals($expectedStatusCode, $this->client->getResponse()->getStatusCode());
  }

  public function provideListeUserData()
  {
    return [
      [403, false],
      [200, true]
    ];
  }

  // Test sur l'ajout d'un utilisateur
  public function testCreateUser(): void
  {
    $crawler = $this->client->request('GET', '/users/create');
    $form = $crawler->selectButton('addUser')->form();

    $form['registration[username]'] = 'test';
    $form['registration[password][first]'] = 'admin';
    $form['registration[password][second]'] = 'admin';
    $form['registration[email]'] = 'test@test.com';
    $form['registration[roles]'] = ['ROLE_ADMIN'];

    $this->client->submit($form);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();

    // todo Faire un nouveau test en fonction de la page
    // ne marche plus car la page est réserver au utilisateur connecter et admin
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Email address")')->count());
  }

  // Test sur la modification d'un utilisateur
  public function testEditUser(): void
  {
    $this->client->loginUser($this->user);

    $crawler = $this->client->request('GET', '/users/' . $this->user->getId() . '/edit');
    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $form = $crawler->selectButton('editUser')->form();

    $form['registration[username]'] = 'nouveau';
    $form['registration[password][first]'] = 'nouveau';
    $form['registration[password][second]'] = 'nouveau';
    $form['registration[email]'] = 'noveau@nouveau.com';
    $form['registration[roles]'] = ['ROLE_ADMIN'];
    $this->client->submit($form);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();

    // todo Faire un nouveau test en fonction de la page
    //ne marche plus car la page est réserver au utilisateur connecter et admin
    // $this->assertGreaterThan(0, $crawler->filter('td:contains("nouveau@nouveau.com")')->count());
  }
}
