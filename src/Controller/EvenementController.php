<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\ConseilRepository;
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
    public function index(EvenementRepository $evenementRepository, ConseilRepository $conseilRepo): Response
    {
        // récupération des conseils
        $conseils = $conseilRepo->findBy([
            'nom' => "Conseil d'été !"
        ]);

        $isToday = false;
        
        //récupération de l'utilisateur
        $utilisateur = $this->getUser();

        $dateNow = new \DateTime('now');
        
        if($utilisateur) {
            $bebe = $utilisateur->getBebe();
        } else {  
            $bebe = "mumu"; // bébé existant en BDD 
        }
       
        $elements = $evenementRepository->findBy([
            'bebe' => $bebe
        ]);

        // comparaison de la date d'insert avec la date actuelle
        foreach($elements as $element) {
            // Extraction du jour et mois :
            $dateElement = $element->getHeureDebut();
            $dateConvert = $dateElement->format('Y-m-d');

            $dateNowConvert = $dateNow->format('Y-m-d');
            
            if($dateConvert == $dateNowConvert) {
                $isToday = true;
            }
        }
        return $this->render('evenement/index.html.twig', [
            'evenements' => $elements,
            'isToday' => $isToday,
            'conseils' => $conseils
        ]);
    }

    /**
     * @Route("/new", name="evenement_new", methods={"GET","POST"})
     */
    /**
     * @Route("/sommeil/ajouter", name="evenement_sommeil", methods={"GET","POST"})
     */
    public function new(Request $request, ConseilRepository $conseilRepo): Response
    {
        // récupération des conseils
        $conseils = $conseilRepo->findBy([
            'nom' => "Quand fera t-il ses nuits ?"
        ]);

        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
              // getUser info de la session :
              $utilisateur = $this->getUser();
  
              $bebe = $utilisateur->getBebe();
              $date = new \DateTime('now');

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
            'conseils' => $conseils,
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
