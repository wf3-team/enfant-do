<?php

namespace App\Form;

use App\Entity\Repas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('biberon')
            ->add('quantite_ml', TextType::class, [
                "label" => "Quantité (ml)",
                "required" => false
            ])
            ->add('puree')
            ->add('compote')
            ->add('yaourt')
            ->add('quantite_pot')
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
            'data_class' => Repas::class,
        ]);
    }
}
