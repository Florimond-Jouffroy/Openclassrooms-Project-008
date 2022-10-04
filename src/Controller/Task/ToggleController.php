<?php

namespace App\Controller\Task;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ToggleController extends AbstractController
{
  public function __construct(
    private EntityManagerInterface $em,
  ) {
  }

  #[Route('/tasks/{id}/toggle', name: "task_toggle")]
  public function toggleTaskAction(Task $task)
  {
    /** @var User $user */
    $user = $this->getUser();
    if (false === $user->isAdmin()) {
      if (false === $task->isHis($user)) {
        $this->addFlash('danger', "Vous n'avez pas les droits");
        return $this->redirectToRoute('homepage');
      }
    }


    $task->toggle(!$task->isDone());
    $this->em->flush();
    $this->addFlash('success', sprintf('La tâche %s a bien été marquée comme faite.', $task->getTitle()));

    return $this->redirectToRoute('task_list');
  }
}
