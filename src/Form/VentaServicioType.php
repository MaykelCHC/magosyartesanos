<?php

namespace App\Form;

use App\Entity\VentaServicio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VentaServicioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechaventaserv')
            ->add('concepto')
            ->add('valor')
            ->add('royaltiescomision')
            ->add('adjuntardocumento')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VentaServicio::class,
        ]);
    }
}
