<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
      ->add('email', EmailType::class, [
        'label' => 'Adresse Email',
        'attr' => [],
        'constraints' => [
          new Assert\NotBlank(message: 'Ce champ ne peux pas etre vide !'),
          new Assert\Email(message: "Votre Email {{ value }} n'est pas valide !")
        ]
      ])
      ->add('username', TextType::class, [
        'label' => 'Pseudo',
        'attr' => [],
        'constraints' => [
          new Assert\NotBlank(message: 'Ce champ ne peut pas etre vide !'),
          new Assert\Length(
            min: 3,
            minMessage: 'Votre pseudo doit faire plus de {{ limit }} caractères',
            max: 20,
            maxMessage: 'Votre pseudo doit faire moins de {{ limit }} caractères'
          )
        ]
      ])
      ->add('password', RepeatedType::class, [
        'type' => PasswordType::class,
        'invalid_message' => 'Les deux mots de passe doivent correspondre.',
        'options' => ['attr' => ['class' => 'password-field']],
        'required' => true,
        'first_options'  => ['label' => 'Mot de passe'],
        'second_options' => ['label' => 'Tapez le mot de passe à nouveau'],
      ])
      ->add(
        'roles',
        ChoiceType::class,
        [
          'label' => 'Roles utilisateur',
          'choices' => ['ROLE_ADMIN' => 'ROLE_ADMIN', 'ROLE_USER' => 'ROLE_USER'],
          'required' => true,
          'multiple' => true,
          'expanded' => true,
        ]
      );
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      'data_class' => User::class,

    ]);
  }
}
