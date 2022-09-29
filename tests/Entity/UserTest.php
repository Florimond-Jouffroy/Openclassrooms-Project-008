<?php

namespace App\Tests\Entity;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{
  private $user;

  public function setUp(): void
  {
    $this->user = new User;
  }

  public function testId(): void
  {
    $this->assertNull($this->user->getId());
  }

  /*
  public function testUsername(): void
  {
    $this->user->setUsername('name');
    $this->assertSame('name', $this->user->getUsername());
  }*/

  public function testPassword(): void
  {
    $this->user->setPassword('password');
    $this->assertSame('password', $this->user->getPassword());
  }

  public function testEmail(): void
  {
    $this->user->setEmail('test@test.com');
    $this->assertSame('test@test.com', $this->user->getEmail());
  }

  public function testSalt(): void
  {
    $this->assertNull($this->user->getSalt());
  }

  public function testEraseCredentials(): void
  {
    $this->assertNull($this->user->eraseCredentials());
  }

  public function testRoles(): void
  {
    $this->user->setRoles(['ROLE_USER']);
    $this->assertSame(['ROLE_USER'], $this->user->getRoles());
  }
}
