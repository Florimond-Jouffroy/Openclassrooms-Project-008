<?php

namespace App\Controller\Admin\Task;

use App\Repository\TaskRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
  public function __construct(private TaskRepository $taskRepository)
  {
  }

  #[IsGranted('ROLE_ADMIN')]
  #[Route('/admin/tasks', name: 'admin_tasks')]
  public function index()
  {
    $tasks = $this->taskRepository->findBy(['user' => null]);

    return $this->render('admin/tasks.html.twig', [
      'tasks' => $tasks
    ]);
  }
}
