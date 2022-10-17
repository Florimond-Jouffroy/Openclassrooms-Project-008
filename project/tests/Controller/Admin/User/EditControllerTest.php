<?php

namespace App\Tests\Controller\Admin\User;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditControllerTest extends WebTestCase
{

  private KernelBrowser|null $client = null;
  private User $admin;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->admin = $userRepository->findOneByEmail('admin@gmail.com');
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  public function testEditUser(): void
  {
    $this->client->loginUser($this->admin);

    $crawler = $this->client->request('GET', '/admin/users/' . $this->admin->getId() . '/edit');

    $form = $crawler->selectButton('editUser')->form();
    $form['registration[username]'] = 'nouveau';
    $form['registration[password][first]'] = 'nouveau';
    $form['registration[password][second]'] = 'nouveau';
    $form['registration[email]'] = 'nouveau@nouveau.org';

    $this->client->submit($form);

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('div.alert-success')->count());
  }
}
