<?php

namespace App\Form;

use App\Entity\AsignarProductoaUser;
use App\Entity\Producto;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AsignarProductoaUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('usuario', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nombre',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('producto', EntityType::class, [
                'class' => Producto::class,
                'choice_label' => 'nombre',
                'multiple' => true,
                'attr' => [
                    'class' => 'custom-select'
                ]
                // 'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AsignarProductoaUser::class,
        ]);
    }
}
