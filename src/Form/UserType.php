<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
<<<<<<< Updated upstream
use Symfony\Component\Form\CallbackTransformer;
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('apellidos', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Apellidos',
                    'name' => 'apellidos',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('empresa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Empresa',
                    'name' => 'empresa',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
                ]
            ])
            ->add('nif', TextType::class, [
=======
                ]
            ])
            ->add('nifcif', TextType::class, [
>>>>>>> Stashed changes
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'NIF/CIF',
                    'name' => 'nif',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('direccion', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Direccion',
                    'name' => 'direccion',
<<<<<<< Updated upstream
                    'style' => 'width:355px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('poblacion', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Poblacion',
                    'name' => 'poblacion',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('provincia', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Provincia',
                    'name' => 'provincia',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('pais', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Pais',
                    'name' => 'pais',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('telefono', NumberType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Telefono',
                    'name' => 'telefono',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email(usuario)',
                    'name' => 'email',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Contraseña',
                    'name' => 'password',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
                ]
            ])
            ->add('emitefactura', ChoiceType::class, [
=======
                ]
            ])
            ->add('emitirfactura', ChoiceType::class, [
>>>>>>> Stashed changes
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'factura',
<<<<<<< Updated upstream
                    'style' => 'width:150px'
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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


=======
                'mapped'=>false,
                'expanded'=>false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'roles',
                ],
                'choices' => [
                    'Roles' => 'Roles',
                    'Usuario' => 'ROLE_USER',
                    'Administrador' => 'ROLE_ADMIN',
                ],
            ]);
    }

>>>>>>> Stashed changes
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
