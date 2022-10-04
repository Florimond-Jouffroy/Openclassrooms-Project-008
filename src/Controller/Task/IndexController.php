<?php

namespace App\Controller\Task;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{

  #[Route('/tasks', name: "task_list")]
  public function listAction()
  {
    /** @var User $user */
    $user = $this->getUser();
    return $this->render('task/list.html.twig', [
      'tasks' => $user->getTasks()
    ]);
  }
}
