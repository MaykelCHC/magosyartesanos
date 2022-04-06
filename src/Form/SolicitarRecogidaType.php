<?php

namespace App\Form;

use App\Entity\SolicitarRecogida;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitarRecogidaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombreempresa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre',
                    'name' => 'nombre',
                    'style' => 'width:150px'
                ]
            ])
            ->add('fecharecogida', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Fecha de Recogida',
                    'class' => 'form-control datetimepicker-input',
                    'data-target' => '#reservationdate'
                ]
            ])
            ->add('horarecogida', TimeType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Hora de Recogida',
                    'class' => 'form-control datetimepicker-input',
                    'data-target' => '#timepicker',
                ]
            ])
            ->add('numeroenvio', NumberType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Numero de Envio',
                    'class' => 'form-control',
                ]
            ])
            ->add('estado', ChoiceType::class, [
                'choices' => [
                    'Aprobada' => '1',
                    'Sin Aprobar' => '0',
                ],
                'label' => false,
                'placeholder' => 'Estado',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SolicitarRecogida::class,
        ]);
    }
}
