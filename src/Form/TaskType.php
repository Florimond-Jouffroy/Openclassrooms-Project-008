<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

class TaskType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
      ->add('title', TextType::class, [
        'label' => 'Title',
        'constraints' => [
          new Assert\NotBlank(message: 'Vous ne pouvez pas ajouter une tache sans titre !'),
          new Assert\Length(
            min: 4,
            minMessage: 'Votre titre doit faire plus de {{ limit }} caractères !',
            max: 50,
            maxMessage: 'Votre titre doit faire moins de {{ limit }} caractères !'
          )
        ]
      ])
      ->add('content', TextareaType::class);
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      'data_class' => Task::class,
      'constraints' => [
        new Assert\NotBlank(message: 'Vous ne pouvez pas ajouter une tache sans contenue !')
      ]
    ]);
  }
}
