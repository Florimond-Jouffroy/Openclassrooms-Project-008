<?php

namespace App\DataFixtures;


use App\Entity\Task;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
  public function __construct(private UserPasswordHasherInterface $passwordHasher)
  {
  }
  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);

    $user = new User();
    $user->setUsername('florimond');
    $user->setEmail('florimond@gmail.com');
    $user->setPassword($this->passwordHasher->hashPassword($user, "admin"));

    $taskD = new Task();
    $taskD->setTitle('task delete');
    $taskD->setContent('task content');

    $taskE = new Task();
    $taskE->setTitle('task edit');
    $taskE->setContent('task edit');

    $taskT = new Task();
    $taskT->setTitle('task toggle');
    $taskT->setContent('task toggle');

    $manager->persist($taskD);
    $manager->persist($taskE);
    $manager->persist($taskT);


    $manager->persist($user);
    $manager->flush();
  }
}
