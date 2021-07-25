<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Hygiene;
use App\Entity\Repas;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('heure_debut', TimeType::class, [
            //     "widget" => "single_text",
            //     'view_timezone'  => 'Europe/Paris'
            //     ])
            ->add('heure_fin', TimeType::class, [
                "widget" => "single_text",
                'view_timezone'  => 'Europe/Paris'
            ])
            ->add('dodo')

            // ->add('enregistrer', SubmitType::class, [
            //     "attr" => [
            //         "class" => "btn btn-primary"
            //     ]
            // ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
