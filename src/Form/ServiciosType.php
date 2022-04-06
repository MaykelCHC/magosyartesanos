<?php

namespace App\Form;

use App\Entity\Servicios;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class ServiciosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre del Servicio',
                    'name' => 'nombre',
                ]
            ])
            ->add('imagen', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k'
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Adjuntar imagen del Producto'
                ],

            ])
            ->add('beneficioxventa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Beneficio por venta',
                    'name' => 'nombre',

                ]
            ])
            ->add('tipomoneda', ChoiceType::class, [
                'choices' => [
                    'USD' => 'USD',
                    'EUR' => 'EUR',
                ],
                'label' => false,
                'expanded' => true,
                'multiple' => false,
                'choice_attr' => [
                    'class' => 'icheck-primary d-inline',
                ]
            ])
            ->add('iva', ChoiceType::class, [
                'choices' => [
                    '0%' => '0',
                    '4%' => '4',
                    '21%' => '21',
                ],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('concepto', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Concepto'
                ]
            ])
            ->add('descripcion', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Descripcion'
                ]
            ])
            ->add('adjuntardocumentos', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k'
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Adjuntar imagen del Producto'
                ],

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Servicios::class,
        ]);
    }
}
