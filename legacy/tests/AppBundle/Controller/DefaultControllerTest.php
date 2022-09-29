<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
  public function testIndexNoLogged()
  {
    $client = static::createClient();

    $client->request('GET', '/');

    $this->assertEquals(302, $client->getResponse()->getStatusCode());
    $crawler = $client->followRedirect();
    $this->assertGreaterThan(0, $crawler->filter('label:contains("Nom d\'utilisateur :")')->count());
  }

  public function testIndexLogged()
  {
    $client = static::createClient([], [
      'PHP_AUTH_USER' => 'florimond@gmail.com',
      'PHP_AUTH_PW'   => 'admin',
    ]);

    $crawler = $client->request('GET', '/');
    $this->assertEquals(200, $client->getResponse()->getStatusCode());
    $this->assertGreaterThan(0, $crawler->filter('a:contains("Se déconnecter")')->count());
  }
}
