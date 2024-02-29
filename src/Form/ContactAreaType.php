<?php

namespace App\Form;

use App\Entity\ContactArea;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactAreaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Ingresar el nombre',
                'attr' => [
                    'placeholder' => 'Nombre',
                    'class' => 'form-control',
                    'required'   => true
                ]
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Ingresar los apellidos',
                'attr' => [
                    'placeholder' => 'Apellido',
                    'class' => 'form-control',
                    'required'   => true
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Ingresar el correo electronico',
                'attr' => [
                    'placeholder' => 'correo electronico',
                    'class' => 'form-control',
                    'required'   => true
                ]
            ])
            ->add('cell_phone', IntegerType::class, [
                'label' => 'Ingresar el numero de celular',
                'attr' => [
                    'placeholder' => 'correo electronico',
                    'class' => 'form-control',
                    'required'   => true
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Ingresar un asunto al formulario',
                'label' => 'Ingresar un asunto',
                'attr' => [
                    'placeholder' => 'correo electronico',
                    'class' => 'form-control',
                    'required'   => true
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactArea::class,
        ]);
    }
}
