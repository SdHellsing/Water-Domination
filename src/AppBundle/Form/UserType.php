<?php

namespace AppBundle\Form;

use AppBundle\DTO\UserRegisterBindingModel;
use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class, [
            'label' => "Username"
        ])
            ->add('password', RepeatedType::class, [
                'first_options' => [
                    'label' => 'Password: '
                ],
                'second_options' => [
                    'label' => 'Repeat Password: '
                ]
            ])
            ->add('email', EmailType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => User::class]);
    }

    public function getName()
    {
        return 'app_bundle_user_type';
    }
}
