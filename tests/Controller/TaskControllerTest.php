<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
  private KernelBrowser|null $client = null;
  private User $user;

  public function setUp(): void
  {
    $this->client = static::createClient();
    $userRepository = static::getContainer()->get(UserRepository::class);
    $this->user = $userRepository->findOneByEmail('florimond@gmail.com');
  }

  // Test sur le changement de la tache comme terminée ou non terminée
  public function testToggleTaskAction(): void
  {
    $this->client->loginUser($this->user);
    $crawler = $this->client->request('GET', '/tasks');
    $this->assertGreaterThan(0, $crawler->filter('div:contains("task toggle")')->count());

    $form = $crawler->filter('div:contains("task toggle")')->selectButton('toggleTask')->form();
    $this->client->submit($form, []);
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $newCrawler = $crawler->filter('div:contains("task toggle")');
    $this->assertGreaterThan(0, $newCrawler->filter('button:contains("Marquer non terminée")')->count());
  }

  // Test sur la suppresion d'une tache
  public function testTaskDelete(): void
  {
    $this->client->loginUser($this->user);

    $crawler = $this->client->request('GET', '/tasks');
    $this->assertGreaterThan(0, $crawler->filter('div:contains("task delete")')->count());

    $form = $crawler->filter('div.tasks:contains("task delete")')->selectButton('deleteTask')->form();
    $this->client->submit($form, []);
    $crawler = $this->client->followRedirect();
    $this->assertEquals(0, $crawler->filter('div:contains("task delete")')->count());
  }

  // test sur la création d'une tache sans etre connecter
  public function testCreateTaskNotLogged(): void
  {
    $this->client->request('GET', '/tasks/create');
    $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Email address")')->count());
  }

  /**
   * @dataProvider provideCreateTaskData
   * test sur la création d'une tache
   */
  public function testCreateTask($expetedStatusCode, $formContent, $string): void
  {
    $this->client->loginUser($this->user);

    $crawler = $this->client->request('GET', '/tasks/create');
    $form = $crawler->selectButton('addTask')->form();
    $this->client->submit($form, $formContent);
    $this->assertEquals($expetedStatusCode, $this->client->getResponse()->getStatusCode());
    $crawler = $this->client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter($string)->count());
  }

  public function provideCreateTaskData()
  {
    // code de la réponse http ; tableau pour le form ;
    return [
      [302, ['task[title]' => 'Test CreateTask', 'task[content]' => 'Tache content'], 'h5:contains("Test CreateTask")'],
    ];
  }

  /**
   * @dataProvider provideTaskListData
   * Test sur l'affichage de la liste des taches
   */
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
  }
}
