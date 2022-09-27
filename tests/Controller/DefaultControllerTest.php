<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DefaultControllerTest extends KernelTestCase
{

  public function testIndexPageIfNotLogging()
  {
    $client = static::createClient();

    $crawler = $client->request('GET', '/');
  }
}
