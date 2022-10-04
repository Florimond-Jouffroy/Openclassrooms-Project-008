<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EditController extends AbstractController
{

  public function __construct(
    private UserPasswordHasherInterface $passwordHasher,
    private EntityManagerInterface $em,
  ) {
  }

  #[IsGranted('ROLE_USER')]
  #[Route('/users/{id}/edit', name: "user_edit")]
  public function editAction(User $user = null, Request $request)
  {
    /** @var User $currentUser */
    $currentUser = $this->getUser();



    if ($currentUser->getId() !== $user->getId()) {
      $this->addFlash('danger', "Vous n'avez pas les droits");
      return $this->redirectToRoute('homepage');
    }

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
