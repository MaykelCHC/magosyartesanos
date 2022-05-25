<?php

namespace App\Form;

use App\Entity\SolicitarPagoRoyalAcumulado;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitarPagoRoyalAcumuladoType extends AbstractType
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
            ->add('royaltiespagar', NumberType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'royaltiesapagar',
                    'placeholder' => 'Royalties a Pagar',
                ],
            ])
            ->add('metododepago', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'metodopago',
                ],
                'choices' => [
                    'Metodo de Pago' => null,
                    'Paypal' => 'paypal',
                    'Westerunion' => 'westerunion',
                    'Bizum' => 'bizum',
                    'Transferencia Bancaria' => 'transferencia',
                    'Efectivo' => 'cash',
                ],
                'multiple' => false,
            ])
            ->add('estado', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'estado',
                ],
                'choices' => [
                    'Estado' => null,
                    'Aceptado' => 'aceptado',
                    'Pendiente' => 'pendiente',
                    'Cancelado' => 'cancelado',
                ],
                'multiple' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SolicitarPagoRoyalAcumulado::class,
        ]);
    }
}
