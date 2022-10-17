<?php

namespace App\Controller\Task;

use App\Entity\Task;
use App\Form\TaskType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CreateController extends AbstractController
{
  public function __construct(
    private EntityManagerInterface $em,
  ) {
  }

  #[Route('/tasks/create', name: "task_create")]
  public function createAction(Request $request): Response
  {
    $form = $this->createForm(TaskType::class, $task = new Task());
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $task->setUser($this->getUser());
      $this->em->persist($task);
      $this->em->flush();

      $this->addFlash('success', 'La tâche a été bien été ajoutée.');

      return $this->redirectToRoute('task_list');
    }

    return $this->render('task/create.html.twig', [
      'form' => $form->createView()
    ]);
  }
}
