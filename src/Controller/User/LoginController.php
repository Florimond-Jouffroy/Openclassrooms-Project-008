<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
  #[Route('/login', name: 'app_login')]
  public function login(AuthenticationUtils $authenticationUtils)
  {
    if ($this->getUser()) {
      return $this->redirectToRoute('homepage');
    }

    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('security/login.html.twig', [
      'last_username' => $lastUsername,
      'error'         => $error,
    ]);
  }

  #[Route('/logout', name: 'app_logout', methods: ['GET'])]
  public function logout()
  {
    // controller can be blank: it will never be called!
    throw new \Exception('Don\'t forget to activate logout in security.yaml');
  }
}