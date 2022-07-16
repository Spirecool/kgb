<?php

namespace App\Form;

use App\Entity\Hideout;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HideoutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code_name')
            ->add('address')
            ->add('country', ChoiceType::class, [
                'choices' => [
                    'Belgium' => 'Belgium',
                    'China' => 'China',
                    'England' => 'England',
                    'France' => 'France',
                    'Germany' => 'Germany',
                    'Italy' => 'Italy',
                    'Spain' => 'Spain',
                    'USA' => 'USA',
                    'Russia' => 'Russia',
                    'Sweden' => 'Sweden',
                ]
            ])
            ->add('hideout_type', ChoiceType::class, [
                'choices' => [
                    'Hotel' => 'Hotel',
                    'House' => 'House',
                    'Flat' => 'Flat',
                    'Monument' => 'Monument',
                    'Outside' => 'Outside',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hideout::class,
        ]);
    }

}
