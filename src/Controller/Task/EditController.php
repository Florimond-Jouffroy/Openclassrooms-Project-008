<?php

namespace App\Controller\Task;

use App\Entity\Task;
use App\Entity\User;
use App\Form\TaskType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class EditController extends AbstractController
{
  public function __construct(
    private EntityManagerInterface $em,
  ) {
  }

  #[Route('/tasks/{id}/edit', name: "task_edit")]
  public function editAction(Task $task, Request $request): Response
  {
    $form = $this->createForm(TaskType::class, $task);
    $form->handleRequest($request);

    /** @var User $user */
    $user = $this->getUser();
    if (false === $user->isAdmin()) {
      if (false === $task->isHis($user)) {
        $this->addFlash('error', "Vous n'avez pas les droits");
        return $this->redirectToRoute('homepage');
      }
    }

    if ($form->isSubmitted() && $form->isValid()) {

      $this->em->flush();
      $this->addFlash('success', 'La tâche a bien été modifiée.');

      return $this->redirectToRoute('task_list');
    }

    return $this->render('task/edit.html.twig', [
      'form' => $form->createView(),
      'task' => $task,
    ]);
  }
}
