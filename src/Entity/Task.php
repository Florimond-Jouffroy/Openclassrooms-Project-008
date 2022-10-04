<?php

namespace App\Entity;

use Datetime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TaskRepository;
use App\Entity\Traits\TimeStampableTrait;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
#[ORM\HasLifecycleCallbacks()]
class Task
{
  use TimeStampableTrait;
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column]
  private ?int $id = null;

  #[ORM\Column(length: 255)]
  private ?string $title = null;

  #[ORM\Column(type: Types::TEXT, nullable: true)]
  private ?string $content = null;

  #[ORM\Column]
  private ?bool $isDone = null;

  #[ORM\ManyToOne(inversedBy: 'tasks')]
  private ?User $user = null;

  public function __construct()
  {
    $this->isDone = false;
  }

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getTitle(): ?string
  {
    return $this->title;
  }

  public function setTitle(string $title): self
  {
    $this->title = $title;

    return $this;
  }

  public function getContent(): ?string
  {
    return $this->content;
  }

  public function setContent(?string $content): self
  {
    $this->content = $content;

    return $this;
  }

  public function isDone(): ?bool
  {
    return $this->isDone;
  }

  public function toggle(bool $isDone): self
  {
    $this->isDone = $isDone;

    return $this;
  }

  public function getUser(): ?User
  {
    return $this->user;
  }

  public function setUser(?User $user): self
  {
    $this->user = $user;

    return $this;
  }

  public function isHis(User $user): bool
  {
    return ($user->getId() === $this->getUser()->getId()) ? true : false;
  }
}
