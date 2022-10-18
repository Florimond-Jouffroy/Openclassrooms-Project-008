<?php

namespace App\Tests\Form;


use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;

class TaskTypeTest extends TypeTestCase
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
            'title' => 'Titre de ma tache',
            'content' => 'Texte de ma tache',
        ];

        $modelTask = new Task();

        $form = $this->factory->create(TaskType::class, $modelTask);

        $expectedTask = new Task();
        $expectedTask->setTitle($formData['title']);
        $expectedTask->setContent($formData['content']);

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());

        $this->assertEquals($expectedTask->getTitle(), $form->get('title')->getData());
        $this->assertEquals($expectedTask->getContent(), $form->get('content')->getData());
    }

    public function testCustomFormView(): void
    {
        $formData = new Task();
        $formData->setTitle('Titre de ma tache');
        $formData->setContent('Texte de ma tache');

        // The initial data may be used to compute custom view variables
        $view = $this->factory->create(TaskType::class, $formData)
            ->createView();

        $this->assertArrayHasKey('title', $view->children);
        $this->assertArrayHasKey('content', $view->children);
    }
}
