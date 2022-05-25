<?php

namespace App\Form;

use App\Entity\Producto;
use App\Entity\VentaProductos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VentaProductosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $date = date('Y-m-d');

        $builder
            ->add('fecha', TextType::class, [
                'data' => $date,
                'attr' => [
                    'class' => 'form-control',
                    'disabled' => 'disabled',
                    'name' => 'fecha',
                ],
            ])
            ->add('codigo', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Codigo de la Venta',
                    'name' => 'codigo'
                ]
            ])
            ->add('valordeVenta', NumberType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control ',
                    'placeholder' => 'Valor de Venta',
                    'name' => 'valordeVenta'
                ]
            ])
            ->add('royaltie', HiddenType::class)//
            ->add('listadoproducto', EntityType::class, [
                'label' => false,
                'class' => Producto::class,
                'choice_label' => 'nombre',
                'placeholder' => 'Seleccionar Producto',
                'multiple' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'listaproductos',
                    'style' => 'width: 120px',
                ]
            ])/*->add('listadousuarios', EntityType::class, [
                'label' => false,
                'class' => User::class,
                'placeholder' => 'Lista de Usuarios',
                'multiple' => false,
                'choice_label' => 'nombre',
                'choice_value' => 'nombre',
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VentaProductos::class,
        ]);
    }
}
