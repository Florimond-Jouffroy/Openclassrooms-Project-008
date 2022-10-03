<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
  public function __construct(
    private TaskRepository $taskRepository,
    private EntityManagerInterface $em,
  ) {
  }

  #[Route('/', name: "homepage")]
  public function indexAction()
  {
    $tasks = $this->taskRepository->findAll();
    return $this->render('default/index.html.twig', [
      'tasks' => $tasks
    ]);
  }
}
