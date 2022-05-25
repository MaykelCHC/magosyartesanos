<?php

namespace App\Form;

use App\Entity\Producto;
<<<<<<< Updated upstream
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
=======
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
>>>>>>> Stashed changes
use Symfony\Component\Validator\Constraints\Image;

class ProductoType extends AbstractType
{
<<<<<<< Updated upstream
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
=======
    private UserRepository $em;

    /**
     * @param UserRepository $em
     */
    public function __construct(UserRepository $em)
    {
        $this->em = $em;
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

>>>>>>> Stashed changes
        $builder
            ->add('nombre', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre del Producto',
                    'name' => 'nombre',
                ]
            ])
            ->add('imagen', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k'
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Adjuntar imagen del Producto'
                ]
            ])
            ->add('beneficioxventa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Beneficio por venta',
                    'name' => 'nombre',

                ]
            ])
<<<<<<< Updated upstream
            ->add('tipomoneda', ChoiceType::class, [
                'choices' => [
                    ' USD ' => '1',
                    ' EUR ' => '2',
                ],
                'label' => false,
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('iva', ChoiceType::class, [
                'choices' => [
                    '0%' => '0',
                    '4%' => '4',
                    '21%' => '21',
                    'Otro' => 'otro',
                ],
                'expanded' => true,
                'multiple' => false
=======
            ->add('tipodemoneda', HiddenType::class, [

            ])
            ->add('iv', HiddenType::class, [

>>>>>>> Stashed changes
            ])
            ->add('IDD', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'I.D.',
                    'name' => 'idd',
                ]
            ])
            ->add('Stock', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Stock',
                    'name' => 'stock',
                ]
<<<<<<< Updated upstream
=======
            ])
            ->add('usuarioid', EntityType::class, [
                'label' => 'Usuarios Asignar',
                'class' => User::class,
                'choice_label' => 'nombre',
                'required' => false,
                'query_builder' => function (UserRepository $use) {
                    return $use->createQueryBuilder('u')
                        ->where("u.roles = JSON_ARRAY('ROLE_USER')");
                },

                'multiple' => false,
                'mapped' => false,
                'placeholder' => 'Listado de Usuarios',
                'attr' => [
                    'class' => 'form-control'
                ]
>>>>>>> Stashed changes
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
