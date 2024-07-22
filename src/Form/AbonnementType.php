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
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;



class Abonnement1Type extends AbstractType
=======





class AbonnementType extends AbstractType
>>>>>>> origin/Abonnement
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           // ->add('idU')
<<<<<<< HEAD
           ->add('moyenTransportA', ChoiceType::class, [
=======
           ->add('moyTrA', ChoiceType::class, [
>>>>>>> origin/Abonnement
            'choices' => [
                'Train' => 'Train',
                'Bus' => 'Bus',
                'Metro' => 'Metro',
<<<<<<< HEAD
            ],
            'placeholder' => '',
            'required' => true, // set required option to true
            'constraints' => [
                new NotBlank([
                    'message' => 'le champ moyen de transport ne peut pas être vide.',
                ]),
            ],
        ])
       
            ->add('dateA', DateType::class, [
                'data' => new \DateTime(),
                
            ])
           // ->add('dateExpA')
=======
                
            ],//'placeholder' => ' ',
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
               // 'placeholder' => ' ',
                'mapped' => true, // This field is not mapped to the entity
                'attr' => [
                    'class' => 'plan-select'
                ]
            ])
           // ->add('etudiantA')
>>>>>>> origin/Abonnement
           ->add('etudiantA', ChoiceType::class, [
            'choices' => [
                'Not Etudiant' => 0,
                'Etudiant' => 1,
            ],
            'expanded' => true,
            'multiple' => false,
        ])
<<<<<<< HEAD
          //  ->add('redEtA')
          //  ->add('plan' )
          ->add('plan', null, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Le champ plan ne peut pas être vide.',
                ]),
            ],
        ])
        // ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
        //     $abonnement = $event->getData();
        //     $form = $event->getForm();
            
        //     // calculate dateExpA based on the selected plan
        //     $plan = $form->get('plan')->getData();
        //     dump($plan); // add this line to check the value of $plan
        //     $now = new \DateTime();
        //     if ($plan->getId() === 1) {
        //         $dateExpA = $now->add(new \DateInterval('P1M')); // add 1 month
        //     } elseif ($plan->getId() === 2) {
        //         $dateExpA = $now->add(new \DateInterval('P6M')); // add 6 months
        //     } else {
        //         $dateExpA = $now->add(new \DateInterval('P1Y')); // add 1 year
        //     }
            
        //     dump($dateExpA); // add this line to check the value of $dateExpA
            
        //     // set the calculated dateExpA on the Abonnement object
        //     $abonnement->setDateExpA($dateExpA);
        // });
        
        



            
<<<<<<< HEAD
=======
=======

            
    
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
        
>>>>>>> origin/Abonnement
>>>>>>> f62d53011f4935443708908357fdda5ed4e51f7e
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
<<<<<<< HEAD
=======
    
>>>>>>> origin/Abonnement
}
