<?php

namespace App\Controller;

use App\Entity\Abonnement;
<<<<<<< HEAD
use App\Form\Abonnement1Type;
=======
use App\Form\AbonnementType;
>>>>>>> origin/Abonnement
use App\Repository\AbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Session\SessionInterface;


=======
>>>>>>> origin/Abonnement

#[Route('/abonnement')]
class AbonnementController extends AbstractController
{
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
    public function index(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }

<<<<<<< HEAD
    
    
    // #[Route('/new', name: 'app_abonnement_new', methods: ['GET', 'POST'])]
    // public function new(Request $request, AbonnementRepository $abonnementRepository): Response
    // {
    //     $abonnement = new Abonnement();
    //     $form = $this->createForm(Abonnement1Type::class, $abonnement);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $abonnementRepository->save($abonnement, true);
    //         $this->addFlash('success', 'Ajout avec succès');

    //         return $this->redirectToRoute('app_abonnement_new', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('abonnement/new.html.twig', [
    //         'abonnement' => $abonnement,
    //         'form' => $form,
    //     ]);
    // }

<<<<<<< HEAD
=======
=======
>>>>>>> origin/Abonnement
>>>>>>> f62d53011f4935443708908357fdda5ed4e51f7e
    #[Route('/new', name: 'app_abonnement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AbonnementRepository $abonnementRepository): Response
    {
        $abonnement = new Abonnement();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f62d53011f4935443708908357fdda5ed4e51f7e
        $form = $this->createForm(Abonnement1Type::class, $abonnement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the plan id selected from the form data
            $plan = $form->get('plan')->getData();
            
            // Find the Plan object in the database using the plan id
           // $plan = $abonnementRepository->getId($planId);
            
            // Calculate the expiration date based on the Plan object
            $dateExpA = new \DateTime();
            switch ($plan->getId()) {
                case '1':
                    $dateExpA->add(new \DateInterval('P1M'));
                    break;
                case '2':
                    $dateExpA->add(new \DateInterval('P6M'));
                    break;
                case '3':
                    $dateExpA->add(new \DateInterval('P1Y'));
                    break;
                default:
                    // Handle the case where an invalid plan id is selected
                    throw new \Exception('Invalid plan selected');
            }
            
            // Set the expiration date on the Abonnement object
            $abonnement->setDateExpA($dateExpA);
            
            // Save the Abonnement object to the repository
            $abonnementRepository->save($abonnement, true);
            
            // Redirect to the new Abonnement form with a success message
            $this->addFlash('success', 'Ajout avec succès');
            return $this->redirectToRoute('app_abonnement_new', [], Response::HTTP_SEE_OTHER);
        }
    
        // Render the new Abonnement form
<<<<<<< HEAD
=======
=======
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);

             return $this->redirectToRoute('app_frontend', [], Response::HTTP_SEE_OTHER);
        }

>>>>>>> origin/Abonnement
>>>>>>> f62d53011f4935443708908357fdda5ed4e51f7e
        return $this->renderForm('abonnement/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> origin/Abonnement
>>>>>>> f62d53011f4935443708908357fdda5ed4e51f7e
    #[Route('/{id}', name: 'app_abonnement_show', methods: ['GET'])]
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('abonnement/show.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_abonnement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
<<<<<<< HEAD
        $form = $this->createForm(Abonnement1Type::class, $abonnement);
=======
        $form = $this->createForm(AbonnementType::class, $abonnement);
>>>>>>> origin/Abonnement
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);
<<<<<<< HEAD
            $this->addFlash('success', 'Modifiée avec succès');

            return $this->redirectToRoute('app_abonnement_edit', ['id' => $abonnement->getId()], Response::HTTP_SEE_OTHER);

=======

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
>>>>>>> origin/Abonnement
        }

        return $this->renderForm('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnement_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {
            $abonnementRepository->remove($abonnement, true);
        }
<<<<<<< HEAD
        //$this->addFlash('success', 'Ajout avec succès');
        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
        // Recherche
 

        
        
        
<<<<<<< HEAD
=======
=======

        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
>>>>>>> origin/Abonnement
>>>>>>> f62d53011f4935443708908357fdda5ed4e51f7e
}
