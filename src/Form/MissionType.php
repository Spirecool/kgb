<?php

namespace App\Form;

use App\Entity\Mission;
use App\Entity\Contact;
use App\Entity\Agent;
use App\Entity\Skill;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mission_code_name')
            ->add('title')
            ->add('description')
            ->add('mission_type', ChoiceType::class, [
                'choices' => [
                    'Surveillance' => 'Surveillance',
                    'Murder' => 'Murder',
                    'Infiltration' => 'Infiltration',
                    'Sabotage' => 'Sabotage',
                ]
            ])
            ->add('mission_status', ChoiceType::class, [
                'choices' => [
                    'In preparation' => 'In preparation',
                    'Current' => 'Current',
                    'Ended' => 'Ended',
                    'Failure' => 'Failure',
                ]
            ])
            ->add('start_date')
            ->add('end_date')
            ->add('country', ChoiceType::class, [
                'choices' => [
                    'Belgium' => 'Belgium',
                    'Brazil' => 'Brazil',
                    'China' => 'China',
                    'Congo' => 'Congo',
                    'France' => 'France',
                    'Japan' => 'Japan',
                    'UK' => 'UK',
                    'USA' => 'USA',
                    'Russia' => 'Russia',
                    'Swiss' => 'Swiss',
                ]
            ])
            ->add('skill', EntityType::class, [
                'choice_label' => 'name',
                'class' => Skill::class,
            ])
            ->add('mission_type', ChoiceType::class, [
                'choices' => [
                    'Surveillance' => 'Surveillance',
                    'Murder' => 'Murder',
                    'Infiltration' => 'Infiltration',
                    'Sabotage' => 'Sabotage',
                ]
            ])
            ->add('target')
            ->add('agent')
            ->add('contact_id', EntityType::class, [
                'choice_label' => function ($contacts) {
                    return $contacts->getCodeName();
                },
                'class' => Contact::class,
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('hideout');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mission::class,
        ]);
    }
}
