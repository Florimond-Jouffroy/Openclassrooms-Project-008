<?php

namespace App\Controller\Admin\User;

use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{

    public function __construct(
        private UserRepository $userRepository
    ) {
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/users', name: "user_list")]
    public function listAction(): Response
    {
        return $this->render('admin/user/users.html.twig', [
            'users' => $this->userRepository->findAll(),
        ]);
    }
}
