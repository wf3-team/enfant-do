<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/accueil")
 */
class EvenementController extends AbstractController
{
    /**
     * @Route("/", name="evenement_index", methods={"GET"})
     */
    public function index(EvenementRepository $evenementRepository): Response
    {
        // champs de l'entité ajout catégory 
        // formulaire de création. Sélection de la possibilité.
        // $conseils = nom du Repo->findBy([
            // 'evenement' => "evenement"
        //]);

        $elements = $evenementRepository->findAll();

        foreach($elements as $element) {
            // Extraire le jour et mois de $dateElement
            $dateElement = $element->getHeureDebut();
            $dateConvert = $dateElement->format('Y-m-d');
            // Trouver le jour actuel dans une variable
            $dateNow = new \DateTime('now');
            $dateNowConvert = $dateNow->format('Y-m-d');
            
            $isToday = false;
            // Comparaison de ces variables dans le if
            // Rajoute 
            if($dateConvert == $dateNowConvert) {
                $isToday = true;
            }
        }
        return $this->render('evenement/index.html.twig', [
            'evenements' => $elements,
            // 'isToday' => $isToday
        ]);
    }

    /**
     * @Route("/new", name="evenement_new", methods={"GET","POST"})
     */
    /**
     * @Route("/sommeil/ajouter", name="evenement_sommeil", methods={"GET","POST"})
     */
    public function new(Request $request, UserRepository $utilisateurRepo): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
              // getUser info de la session :
              // $utilisateur = $this->getUser();
  
              $utilisateur = $utilisateurRepo->findOneBy([
                  'pseudo' => 'maman'
              ]);
   
              // Avec l'ajout de la connexion utilisateur :
              // $bebe = $utilisateurRepo->findOneBy([
              //     'bebe' => $utilisateur
              // ]);
  
              // $bebe = $bebeRepo->findOneBy([
              //     'prenom' => 'lolo'
              // ]);
  
              $bebe = $utilisateur->getBebe();
              $date = new \DateTime('now');
               // Convertir la date en string 
            //   $date = new \DateTime('@'.strtotime('now'));
          
              // Remplir l'instance event avec tous les champs évènement :
              $evenement
                  ->setUser($utilisateur)
                  ->setBebe($bebe)
                  ->setHeureDebut($date)


                ;

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="evenement_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="evenement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Evenement $evenement): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="evenement_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
    }
}
