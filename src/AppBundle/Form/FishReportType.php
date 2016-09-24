<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FishReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class)
            ->add('startTime', TimeType::class)
            ->add('endTime', TimeType::class)
            ->add('cloudCover', TextType::class)
            ->add('visibility', TextType::class)
            ->add('maxDepth', TextType::class)
            ->add('maxDepth', TextType::class)
            ->add('waterTemperature', TextType::class)
            ->add('current', ChoiceType::class, [
                'choices' =>
                    [
                        'Slow'   => 'Slow',
                        'Middle' => 'Middle',
                        'Fast'   => 'Fast',
                    ],
            ])
            ->add('wind', TextType::class)
            ->add('tide', ChoiceType::class, [
                'choices' =>
                    [
                        'Growing up'   => 'Growing up',
                        'Growing down' => 'Growing down',
                    ],
            ])
            ->add('seaConditions', ChoiceType::class,
                [
                    'choices' => [
                        'Calm'  => 'Calm',
                        'Mild'  => 'Mild',
                        'Rough' => 'Rough',
                    ],
                ])
            ->add('site', EntityType::class, [
                'class' => 'AppBundle:Sites',
                'choice_label' => 'name'
            ])
            ->add('save', SubmitType::class, ['label' => 'Save report']);
    }
}