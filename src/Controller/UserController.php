<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
  public function __construct(
    private UserPasswordHasherInterface $passwordHasher,
    private EntityManagerInterface $em,
    private UserRepository $userRepository
  ) {
  }
  #[IsGranted('ROLE_ADMIN')]
  #[Route('/users', name: "user_list")]
  public function listAction()
  {
    return $this->render('user/list.html.twig', [
      'users' => $this->userRepository->findAll(),
    ]);
  }

  #[Route('/users/create', name: "user_create")]
  public function register(Request $request)
  {
    $form = $this->createForm(RegistrationType::class, $user = new User());
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $user->setPassword($this->passwordHasher->hashPassword($user, $user->getPassword()));
      $this->em->persist($user);
      $this->em->flush();

      $this->addFlash('success', "L'utilisateur a bien été ajouté.");
      return $this->redirectToRoute('app_login');
    }

    return $this->render('user/create.html.twig', [
      'form' => $form->createView()
    ]);
  }

  //#[IsGranted('ROLE_ADMIN')]
  #[Route('/users/{id}/edit', name: "user_edit")]
  public function editAction(User $user, Request $request)
  {
    $form = $this->createForm(RegistrationType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $user->setPassword($this->passwordHasher->hashPassword($user, $user->getPassword()));
      $this->em->persist($user);
      $this->em->flush();
      $this->addFlash('success', "L'utilisateur a bien été modifié");

      return $this->redirectToRoute('user_list');
    }

    return $this->render('user/edit.html.twig', [
      'form' => $form->createView(),
    ]);
  }
}
