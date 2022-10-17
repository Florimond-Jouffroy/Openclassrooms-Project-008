<?php

namespace App\Tests\Repository;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TaskRepositoryTest extends KernelTestCase
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
      ->getRepository(Task::class)
      ->findOneBy(['title' => 'task delete']);

    $this->assertSame('task content', $task->getContent());
  }

  public function tearDown(): void
  {
    parent::tearDown();

    $this->entityManager->close();
    $this->entityManager = null;
  }
}
