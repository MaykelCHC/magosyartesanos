<?php

namespace App\Form;

use App\Entity\TransferenciaBancaria;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransferenciaBancariaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombrebanco', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre del Banco',
                    'name' => 'nombrebanco',
                ]
            ])
            ->add('nombretitular', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre del Titular',
                    'name' => 'nombretitular',
                ]
            ])
            ->add('numerocuenta', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numero de Cuenta',
                    'name' => 'numerocuenta',
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
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TransferenciaBancaria::class,
        ]);
    }
}
