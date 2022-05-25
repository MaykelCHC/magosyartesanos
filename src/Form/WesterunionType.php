<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Westerunion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WesterunionType extends AbstractType
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
                ]
            ])
            ->add('apellidoPaterno', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Apellido Paterno',
                    'name' => 'apellidoPaterno',
                ]
            ])
            ->add('apellidoMaterno', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Apellido Materno',
                    'name' => 'apellidoMaterno',
                ]
            ])
            ->add('correo', EmailType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Correo',
                    'name' => 'correo',
                ]
            ])
            ->add('ciudad', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ciudad',
                    'name' => 'ciudad',
                ]
            ])
            ->add('numeromovil', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numero de Movil',
                    'name' => 'numeromovil',
                ]
            ])
            ->add('usuarioid', EntityType::class, [
                'required' => false,
                'choice_name' => 'nombre',
                'class' => User::class,
                'label' => false,
                'placeholder' => 'Asignar Usuario',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-top:10px'
                ]
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Westerunion::class,
        ]);
    }
}
