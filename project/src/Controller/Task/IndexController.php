<?php

namespace App\Controller\Task;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{

    #[Route('/tasks', name: "task_list")]
    public function listAction(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $this->render('task/list.html.twig', [
            'tasks' => $user->getTasks()
        ]);
    }
}
