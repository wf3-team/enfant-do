<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Hygiene;
use App\Form\HygieneType;
use App\Repository\BebeRepository;
use App\Repository\ConseilRepository;
use App\Repository\HygieneRepository;
use App\Repository\UserRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hygiene")
 */
class HygieneController extends AbstractController
{
    /**
     * @Route("/", name="hygiene_index", methods={"GET"})
     */
    public function index(HygieneRepository $hygieneRepository): Response
    {
        return $this->render('hygiene/index.html.twig', [
            'hygienes' => $hygieneRepository->findAll(),
        ]);
    }

    /**
     * @Route("/ajouter", name="hygiene_new", methods={"GET","POST"})
     */
    public function new(Request $request, ConseilRepository $conseilRepo): Response
    {
        // récupération des conseils
        $conseils = $conseilRepo->findBy([
            'nom' => "Hygiene"
        ]);

        $hygiene = new Hygiene();
        $form = $this->createForm(HygieneType::class, $hygiene);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // création d'évènement et le lier au repas
            $event = new Evenement();

            //récupération de l'utilisateur
            $utilisateur = $this->getUser();

            $bebe = $utilisateur->getBebe();
 
            $date = new \DateTime('now');

             $event
                ->setUser($utilisateur)
                ->setBebe($bebe)
                ->setDodo(false)
                ->setHygiene($hygiene)
                ->setHeureDebut($date)
                // ->setRepas($hygiene) //pas besoin car il peut être NULL
                // ->setHeureFin() //pas besoin car il peut être NULL  
            ;

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hygiene);
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hygiene/new.html.twig', [
            'hygiene' => $hygiene,
            'conseils' => $conseils,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="hygiene_show", methods={"GET"})
     */
    public function show(Hygiene $hygiene): Response
    {
        return $this->render('hygiene/show.html.twig', [
            'hygiene' => $hygiene,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="hygiene_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Hygiene $hygiene): Response
    {
        $form = $this->createForm(HygieneType::class, $hygiene);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hygiene_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hygiene/edit.html.twig', [
            'hygiene' => $hygiene,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="hygiene_delete", methods={"POST"})
     */
    public function delete(Request $request, Hygiene $hygiene): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hygiene->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hygiene);
            $entityManager->flush();
        }

        return $this->redirectToRoute('hygiene_index', [], Response::HTTP_SEE_OTHER);
    }
}
