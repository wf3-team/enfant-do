<?php

namespace App\Form;

use App\Entity\Bebe;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class BebeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom')
            // ->add('roles', ChoiceType::class, )
            ->add('date_naissance', DateType::class, [
                "widget" => "single_text"

            ] )
            ->add('poids', TextType::class, [
                'label'=> 'Poids (en kg)'
            ])
            ->add('taille', TextType::class, [
                'label'=> 'Taille (en cm)'
            ])
            ->add('genre', ChoiceType::class, [
                "choices" => [
                    "Fille" => "fille",
                    "Garçon" => "garçon"
                ],
                "multiple" => false,
                "expanded" => true
            ])
            ->add('photo', FileType::class, [
                'mapped' => false,
                'required' => false,
                'multiple' => false,
                'label' => "Ajouter la photo du bébé",
                'attr' => [
                    'placeholder' => "parcourir pour trouver l'image"
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2048K',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg',
                            'image/gif'
                        ]
                    ])
                ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bebe::class,
        ]);
    }
}
