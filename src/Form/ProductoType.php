<?php

namespace App\Form;

use App\Entity\Producto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre del Producto',
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
                ]
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
                    ' USD ' => '1',
                    ' EUR ' => '2',
                ],
                'label' => false,
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('iva', ChoiceType::class, [
                'choices' => [
                    '0%' => '0',
                    '4%' => '4',
                    '21%' => '21',
                    'Otro' => 'otro',
                ],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('IDD', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'I.D.',
                    'name' => 'idd',
                ]
            ])
            ->add('Stock', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Stock',
                    'name' => 'stock',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
