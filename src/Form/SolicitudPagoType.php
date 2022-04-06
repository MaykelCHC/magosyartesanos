<?php

namespace App\Form;

use App\Entity\SolicitudPago;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitudPagoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechasolicitud')
            ->add('totalroyaltiesacumulados')
            ->add('royaltiesxpagar')
            ->add('metododepago')
            ->add('estado')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SolicitudPago::class,
        ]);
    }
}
