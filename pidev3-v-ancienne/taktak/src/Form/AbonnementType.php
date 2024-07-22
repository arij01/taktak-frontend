<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;





class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           // ->add('idU')
           ->add('moyTrA', ChoiceType::class, [
            'choices' => [
                'Train' => 'Train',
                'Bus' => 'Bus',
                'Metro' => 'Metro',
                
            ],'placeholder' => ' ',
        ])
        ->add('dateA', DateType::class, [
            'data' => new \DateTime(),
            
        ])
            //->add('dateExpA')
            ->add('idtypeA', ChoiceType::class, [
                'choices' => [
                    'Mensuel' => 1,
                    'Semestriel' => 2,
                    'Annuel' => 3,
                ],
                'placeholder' => ' ',
                'mapped' => true, // This field is not mapped to the entity
                'attr' => [
                    'class' => 'plan-select'
                ]
            ])
           // ->add('etudiantA')
           ->add('etudiantA', ChoiceType::class, [
            'choices' => [
                'Not an etudiant' => 0,
                'Etudiant' => 1,
            ],
            'expanded' => true,
            'multiple' => false,
        ])

            
    
            // ->add('redEtA', IntegerType::class, [
            //     'required' => false,
            //     'empty_data' => 0,
            // ])
            //->add('redEvA')
            // ->add('redEvA', TextType::class, [
            //     'required' => false,
            //     'mapped' => true, // This field is mapped to the entity
            // ])
            // ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            //     $form = $event->getForm();
            //     $data = $form->getData();
            //     $redEvA = $data['redEvA'];
                
            //     if ($redEvA == 'promo') {
            //         $data['redEvA'] = 20;
            //     } else {
            //         $data['redEvA'] = 0;
            //     }
            // })
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
    
}
