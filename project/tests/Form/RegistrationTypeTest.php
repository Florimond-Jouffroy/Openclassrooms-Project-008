<?php

namespace App\Tests\Form;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;

class RegistrationTypeTest extends TypeTestCase
{

  protected function getExtensions(): array
  {
    $validator = Validation::createValidator();


    return [
      new ValidatorExtension($validator),
    ];
  }

  public function testSubmitValidData(): void
  {
    $formData = [
      'username' => 'FormTypeTest',
      'password' => ['first' => 'root', 'second' => 'root'],
      'email' => 'email@email.fr',
      'roles' => ['ROLE_ADMIN']
    ];

    $modelUser = new User();

    $form = $this->factory->create(RegistrationType::class, $modelUser);

    $expectedUser = new User();
    $expectedUser->setUsername('FormTypeTest');
    $expectedUser->setPassword('root');
    $expectedUser->setEmail('email@email.fr');
    $expectedUser->setRoles(['ROLE_ADMIN']);

    $form->submit($formData);

    $this->assertTrue($form->isSynchronized());

    $this->assertEquals($expectedUser, $modelUser);


    $view = $form->createView();
    $children = $view->children;

    foreach (array_keys($formData) as $key) {
      $this->assertArrayHasKey($key, $children);
    }
  }
}
