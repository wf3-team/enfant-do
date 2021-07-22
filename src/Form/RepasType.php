<?php

namespace App\Form;

use App\Entity\Repas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('biberon')
            ->add('quantite_ml')
            ->add('puree')
            ->add('compote')
            ->add('yaourt')
            ->add('quantite_pot')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Repas::class,
        ]);
    }
}
