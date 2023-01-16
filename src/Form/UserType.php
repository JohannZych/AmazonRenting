<?php

namespace App\Form;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\NumericFilterType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, ['label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('lastName', TextType::class, ['label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('email', EmailType::class, ['label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('password', PasswordType::class, [
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control'],
                'required' => false
            ])
            ->add('address', TextType::class, ['label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('zipCode', IntegerType::class, ['label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('city', TextType::class, ['label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('phoneNumber', TelType::class, ['label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
