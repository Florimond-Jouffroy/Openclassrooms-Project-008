<?php

namespace App\Controller\Task;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeleteController extends AbstractController
{

  public function __construct(
    private EntityManagerInterface $em,
  ) {
  }

  #[Route('/tasks/{id}/delete', name: 'task_delete')]
  public function deleteTaskAction(Task $task)
  {
    /** @var User $user */
    $user = $this->getUser();
    if (false === $user->isAdmin()) {
      if (false === $task->isHis($this->getUser())) {
        $this->addFlash('danger', "Vous n'avez pas les droits");
        return $this->redirectToRoute('homepage');
      }
    }

    $this->em->remove($task);
    $this->em->flush();

    $this->addFlash('success', 'La tâche a bien été supprimée.');

    return $this->redirectToRoute('task_list');
  }
}
