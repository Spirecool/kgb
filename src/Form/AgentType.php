<?php

namespace App\Form;

use App\Entity\Agent;
use App\Entity\Skill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AgentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('last_name')
            ->add('first_name')
            ->add('identification_code')
            ->add('birthday', DateType::class, [
                'widget' => 'choice',
                'format' => 'y-M-d',
                'years' => range(date("Y") - 85, date("Y") - 18)
            ])
            ->add('nationality', ChoiceType::class, [
                'choices' => [
                    'American' => 'American',
                    'Belgian' => 'Belgian',
                    'Chinese' => 'Chinese',
                    'English' => 'English',
                    'French' => 'French',
                    'German' => 'German',
                    'Italian' => 'Italian',
                    'Spanish' => 'Spanish',
                    'Russian' => 'Russian',
                    'Swedish' => 'Swedish',
                ]
            ])
            ->add('skill', EntityType::class, [
                'choice_label' => 'name',
                'class' => Skill::class,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agent::class,
        ]);
    }
}
