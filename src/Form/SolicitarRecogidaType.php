<?php

namespace App\Form;

use App\Entity\SolicitarRecogida;
<<<<<<< Updated upstream
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
=======
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
>>>>>>> Stashed changes
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitarRecogidaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< Updated upstream
            ->add('nombreempresa', TextType::class, [
=======
            ->add('nombre', TextType::class, [
>>>>>>> Stashed changes
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre',
                    'name' => 'nombre',
<<<<<<< Updated upstream
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
=======
                ]
            ])
            ->add('fecha', DateType::class, [
                'label' => false,
                'html5' => true,
                'format' => 'yyyy-MM-dd',
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'fecha'
                ],
            ])
            ->add('hora', TimeType::class, [
                'label' => false,
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'hora'
                ],
            ])
            ->add('numeroenvio', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numero de Envio',
                    'name' => 'numeroenvio',
                ]
            ])
            ->add('estado', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Estado',
                    'name' => 'estado',
                ]
            ])
            ->add('usuarioid', EntityType::class, [
                'label' => false,
                'class' => User::class,
                'choice_label' => 'nombre',
                'placeholder' => 'Lista de Usuarios',
                'multiple' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                ]
            ]);;
>>>>>>> Stashed changes
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SolicitarRecogida::class,
        ]);
    }
}
