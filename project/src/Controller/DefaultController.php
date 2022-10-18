<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function __construct(
        private TaskRepository $taskRepository,
        private EntityManagerInterface $em,
    ) {
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/', name: "homepage")]
    public function indexAction(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $this->render('default/index.html.twig', [
            'tasks' => $user->getTasks()
        ]);
    }
}
