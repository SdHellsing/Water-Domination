<?php

namespace AppBundle\Form;

use AppBundle\DTO\UserRegisterBindingModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('username', TextType::class, [
            'label' => "Username"
        ])
            ->add('password', RepeatedType::class, [
                'first_options' => [
                    'label' => 'Password: '
                    ],
                'second_options' => [
                    'label' => 'Repeat Password: '
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => UserRegisterBindingModel::class]);
    }

    public function getName()
    {
        return 'app_bundle_user_type';
    }
}
