<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre',
                    'name' => 'nombre',
                    'style' => 'width:150px'
                ]
            ])
            ->add('apellidos', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Apellidos',
                    'name' => 'apellidos',
                    'style' => 'width:150px'
                ]
            ])
            ->add('empresa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Empresa',
                    'name' => 'empresa',
                    'style' => 'width:150px'
                ]
            ])
            ->add('nif', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'NIF/CIF',
                    'name' => 'nif',
                    'style' => 'width:150px'
                ]
            ])
            ->add('direccion', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Direccion',
                    'name' => 'direccion',
                    'style' => 'width:355px'
                ]
            ])
            ->add('poblacion', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Poblacion',
                    'name' => 'poblacion',
                    'style' => 'width:150px'
                ]
            ])
            ->add('provincia', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Provincia',
                    'name' => 'provincia',
                    'style' => 'width:150px'
                ]
            ])
            ->add('pais', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Pais',
                    'name' => 'pais',
                    'style' => 'width:150px'
                ]
            ])
            ->add('telefono', NumberType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Telefono',
                    'name' => 'telefono',
                    'style' => 'width:150px'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email(usuario)',
                    'name' => 'email',
                    'style' => 'width:150px'
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Contraseña',
                    'name' => 'password',
                    'style' => 'width:150px'
                ]
            ])
            ->add('emitefactura', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'factura',
                    'style' => 'width:150px'
                ],
                'choices' => [
                    'Emitir Factura' => null,
                    'SI' => '1',
                    'NO' => '0',
                ],
                'multiple' => false,
            ])
            ->add('roles', ChoiceType::class, [
                'label' => false,
                'multiple' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'roles',
                    'style' => 'width:150px'
                ],
                'choices' => [
                    'Roles' => null,
                    'Usuario' => 'ROLE_USER',
                    'Proveedor' => 'ROLE_PARTNER',
                    'Administrador' => 'ROLE_ADMIN',
                ],

            ]);

        // Data transformer
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($rolesArray) {
                    // transform the array to a string
                    return count($rolesArray) ? $rolesArray[0] : null;
                },
                function ($rolesString) {
                    // transform the string back to an array
                    return [$rolesString];
                }
            ));

    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
