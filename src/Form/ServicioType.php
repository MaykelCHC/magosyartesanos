<?php

namespace App\Form;

use App\Entity\Servicio;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;

class ServicioType extends AbstractType
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
                ]
            ])
            ->add('beneficioxventa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Beneficio por venta',
                    'name' => 'beneficioxventa',

                ]
            ])
            ->add('tipodmoneda', HiddenType::class, [

            ])
            ->add('iv', HiddenType::class, [

            ])
            ->add('concepto', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Concepto',
                    'name' => 'concepto',
                ]
            ])
            ->add('descripcion', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Descripcion',
                    'name' => 'descripcion',
                ]
            ])
            ->add('documento', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
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
                'required' => false,
                'choice_name' => 'nombre',
                'class' => User::class,
                'query_builder' => function (UserRepository $use) {
                    return $use->createQueryBuilder('u')
                        ->where("u.roles = JSON_ARRAY('ROLE_USER')");
                },
                'label' => false,
                'placeholder' => 'Asignar Usuario',
                'attr' => [
                    'class' => 'form-control',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Servicio::class,
        ]);
    }
}
