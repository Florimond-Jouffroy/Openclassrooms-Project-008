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

    $admin = new User();
    $admin->setUsername('admin');
    $admin->setEmail('admin@gmail.com');
    $admin->setRoles(['ROLE_ADMIN']);
    $admin->setPassword($this->passwordHasher->hashPassword($user, "admin"));


    // Tasks user
    $taskD = new Task();
    $taskD->setTitle('task delete');
    $taskD->setContent('task content');
    $taskD->setUser($user);

    $taskE = new Task();
    $taskE->setTitle('task edit');
    $taskE->setContent('task edit');
    $taskE->setUser($user);

    $taskT = new Task();
    $taskT->setTitle('task toggle');
    $taskT->setContent('task toggle');
    $taskT->setUser($user);

    // tasks admin
    $taskDA = new Task();
    $taskDA->setTitle('task delete');
    $taskDA->setContent('task content');
    $taskDA->setUser($admin);

    for ($t = 0; $t < 3; $t++) {
      $task = new Task;
      $task->setTitle('task-' . $t);
      $task->setContent('content');
      $manager->persist($task);
    }

    $taskEA = new Task();
    $taskEA->setTitle('task edit');
    $taskEA->setContent('task edit');
    $taskEA->setUser($admin);

    $taskTA = new Task();
    $taskTA->setTitle('task toggle');
    $taskTA->setContent('task toggle');
    $taskTA->setUser($admin);

    $manager->persist($taskD);
    $manager->persist($taskE);
    $manager->persist($taskT);

    $manager->persist($taskDA);
    $manager->persist($taskEA);
    $manager->persist($taskTA);

    $manager->persist($admin);
    $manager->persist($user);
    $manager->flush();
  }
}
