<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\VentaServicios;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class VentaServiciosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $date = date('d/m/Y');

        $builder
            ->add('fecha', TextType::class, [
                'data' => $date,
                'attr' => [
                    'class' => 'form-control',
                    'disabled' => 'disabled',
                    'name' => 'fecha',
                ],
            ])
            ->add('concepto', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Concepto',
                    'name' => 'concepto',
                    'rows' => '3',
                ]
            ])
            ->add('codigo', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Codigo de Venta',
                    'name' => 'codigo'
                ]
            ])
            ->add('valor', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Valor',
                    'name' => 'valor'
                ]
            ])
            ->add('comisionRoyalties', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Royalties',
                    'name' => 'comisionRoyalties'
                ]
            ])
            ->add('documento', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '4096k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Adjuntar Documento del Producto'
                ]
            ])
            ->add('usuarioid', EntityType::class, [
                'label' => false,
                'class' => User::class,
                'choice_label' => 'nombre',
                'placeholder' => 'Lista de Usuarios',
                'multiple' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VentaServicios::class,
        ]);
    }
}
