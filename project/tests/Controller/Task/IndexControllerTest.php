<?php

namespace App\Tests\Controller\Task;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  public function testTaskList(): void
  {
    $this->client->loginUser($this->user);

    $this->client->request('GET', '/tasks');

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
  }

  public function testTaskListNotLogged(): void
  {
    $this->client->request('GET', '/tasks');

    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

    $crawler = $this->client->followRedirect();

    $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    $this->assertEquals(1, $crawler->filter('label:contains("Email address")')->count());
  }

  /**
   * @dataProvider provideTaskListData
   * Test sur l'affichage de la liste des taches
   */
  /*
  public function testTaskList($expetedStatusCode, $stringContains, $userLogged): void
  {
    if ($userLogged === true) {
      $this->client->loginUser($this->user);
    }

    $crawler = $this->client->request('GET', '/tasks');
    $this->assertEquals($expetedStatusCode, $this->client->getResponse()->getStatusCode());

    if ($expetedStatusCode === 302) {
      $crawler = $this->client->followRedirect();
    }
    $this->assertGreaterThan(0, $crawler->filter($stringContains)->count());
  }


  public function provideTaskListData()
  {
    // Code de la réponse ; param du filter ; Si l'utilisateur doit etre co
    return [
      [200, 'a:contains("Créer une tâche")', true],
      [302, 'label:contains("Email address")', false]
    ];
  }*/
}
