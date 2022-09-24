<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class TaskControllerTest extends WebTestCase
{
  public function testTaskNotLogged()
  {
    $client = static::createClient();
    $client->request('GET', '/tasks');
    $this->assertEquals(302, $client->getResponse()->getStatusCode());
    $crawler = $client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Nom d\'utilisateur :")')->count());
  }

  public function testTaskList()
  {
    $client = static::createClient([], [
      'PHP_AUTH_USER' => 'florimond',
      'PHP_AUTH_PW'   => 'admin',
    ]);

    $crawler = $client->request('GET', '/tasks');

    $this->assertEquals(200, $client->getResponse()->getStatusCode());
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Créer une tâche")')->count());
  }

  public function testCreateTaskNoLogged()
  {
    $client = static::createClient();
    $client->request('GET', '/tasks/create');

    $this->assertEquals(302, $client->getResponse()->getStatusCode());
    $crawler = $client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Nom d\'utilisateur :")')->count());
  }

  public function testCreateTask()
  {
    $client = static::createClient([], [
      'PHP_AUTH_USER' => 'florimond',
      'PHP_AUTH_PW'   => 'admin',
    ]);

    $crawler = $client->request('GET', '/tasks/create');
    $form = $crawler->selectButton('addTask')->form();
    $client->submit($form, ['task[title]' => 'Test CreateTask', 'task[content]' => 'Tache content']);
    $this->assertEquals(302, $client->getResponse()->getStatusCode());
    $crawler = $client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Test CreateTask")')->count());
  }

  public function testToggleTaskAction()
  {
    $client = static::createClient([], [
      'PHP_AUTH_USER' => 'florimond',
      'PHP_AUTH_PW'   => 'admin',
    ]);

    $crawler = $client->request('GET', '/tasks/create');
    $form = $crawler->selectButton('addTask')->form();
    $crawler = $client->submit($form, ['task[title]' => 'Tache ToggleTask', 'task[content]' => 'Tache content']);
    $this->assertEquals(302, $client->getResponse()->getStatusCode());

    $crawler = $client->request('GET', '/tasks');
    $this->assertGreaterThan(0, $crawler->filter('div:contains("Tache ToggleTask")')->count());

    $form = $crawler->filter('div:contains("Tache ToggleTask")')->selectButton('toggleTask')->form();
    $crawler = $client->submit($form, []);
    $this->assertEquals(302, $client->getResponse()->getStatusCode());
    $crawler = $client->followRedirect();
    $newCrawler = $crawler->filter('div:contains("Tache ToggleTask")');
    $this->assertGreaterThan(0, $newCrawler->filter('button:contains("Marquer non terminée")')->count());
  }

  public function testTaskDelete()
  {
    $client = static::createClient([], [
      'PHP_AUTH_USER' => 'florimond',
      'PHP_AUTH_PW'   => 'admin',
    ]);

    $crawler = $client->request('GET', '/tasks/create');
    $form = $crawler->selectButton('addTask')->form();
    $crawler = $client->submit($form, ['task[title]' => 'Tache deleteTask', 'task[content]' => 'Tache content']);
    $this->assertEquals(302, $client->getResponse()->getStatusCode());

    $crawler = $client->request('GET', '/tasks');
    $this->assertGreaterThan(0, $crawler->filter('div:contains("Tache deleteTask")')->count());

    $form = $crawler->filter('div.task:contains("Tache deleteTask")')->selectButton('deleteTask')->form();

    $client->submit($form, []);

    $crawler = $client->followRedirect();
    $this->assertEquals(0, $crawler->filter('div:contains("Tache deleteTask")')->count());
  }
}
