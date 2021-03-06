<?php

namespace App\Form;

use App\Entity\SolicitarPagoRoyalAcumuladoServicio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitarPagoRoyalAcumuladoServicioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha')
            ->add('rayaltieacum')
            ->add('royaltiepagado')
            ->add('saldoroyaltie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SolicitarPagoRoyalAcumuladoServicio::class,
        ]);
    }
}
