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

        $manager->persist($user);

        $userTwo = new User();
        $userTwo->setUsername('userTwo');
        $userTwo->setEmail('test@gmail.com');
        $userTwo->setPassword($this->passwordHasher->hashPassword($user, "admin"));

        $manager->persist($userTwo);

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@gmail.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($user, "admin"));

        $manager->persist($admin);


        // Tasks user
        $task = new Task();
        $task->setTitle('task delete');
        $task->setContent('task content');
        $task->setUser($user);
        $manager->persist($task);

        $task = new Task();
        $task->setTitle('task edit');
        $task->setContent('task edit');
        $task->setUser($user);
        $manager->persist($task);

        $task = new Task();
        $task->setTitle('task toggle');
        $task->setContent('task toggle');
        $task->setUser($user);
        $manager->persist($task);

        // Tasks userTwo

        $task = new Task();
        $task->setTitle('task delete');
        $task->setContent('task content');
        $task->setUser($userTwo);
        $manager->persist($task);

        // tasks admin
        $task = new Task();
        $task->setTitle('task delete');
        $task->setContent('task content');
        $task->setUser($admin);
        $manager->persist($task);

        $task = new Task();
        $task->setTitle('task edit');
        $task->setContent('task edit');
        $task->setUser($admin);
        $manager->persist($task);

        $task = new Task();
        $task->setTitle('task toggle');
        $task->setContent('task toggle');
        $task->setUser($admin);
        $manager->persist($task);


        for ($t = 0; $t < 3; $t++) {
            $task = new Task;
            $task->setTitle('task-' . $t);
            $task->setContent('content');
            $manager->persist($task);
        }

        $manager->flush();
    }
}
