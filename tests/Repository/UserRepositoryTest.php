<?php

namespace App\Tests\Repository;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends KernelTestCase
{
  /**
   * @var \Doctrine\ORM\EntityManager
   */
  private $entityManager;

  protected function setUp(): void
  {
    $kernel = self::bootKernel();

    $this->entityManager = $kernel->getContainer()
      ->get('doctrine')
      ->getManager();
  }

  public function testSearchByName(): void
  {
    $task = $this->entityManager
      ->getRepository(User::class)
      ->findOneBy(['email' => 'florimond@gmail.com']);

    $this->assertSame('florimond', $task->getUsername());
  }

  public function tearDown(): void
  {
    parent::tearDown();

    $this->entityManager->close();
    $this->entityManager = null;
  }
}
