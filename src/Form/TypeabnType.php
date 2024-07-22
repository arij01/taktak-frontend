<?php

namespace App\Form;

use App\Entity\Typeabn;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints\NotBlank;

class Typeabn1Type extends AbstractType
=======

class TypeabnType extends AbstractType
>>>>>>> origin/Abonnement
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('dureeA', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le champ durée ne peut pas être vide.',
                    ]),
                ],
            ])
            ->add('prixA', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le champ prix ne peut pas être vide.',
                    ]),
                ],
            ])
=======
            ->add('dureeA')
            ->add('prixA')
>>>>>>> origin/Abonnement
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Typeabn::class,
        ]);
    }
}
