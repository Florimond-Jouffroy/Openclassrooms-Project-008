<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskTest extends WebTestCase
{

  private $task;

  public function setUp(): void
  {
    $this->task = new Task;
  }

  public function testId(): void
  {
    $this->assertNull($this->task->getId());
  }

  public function testTitle(): void
  {
    $this->task->setTitle('Title');
    $this->assertSame('Title', $this->task->getTitle());
  }

  public function testContent(): void
  {
    $this->task->setContent('Content');
    $this->assertSame('Content', $this->task->getContent());
  }
}
