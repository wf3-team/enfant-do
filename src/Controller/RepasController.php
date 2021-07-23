<?php

namespace App\Controller;

use App\Entity\Bebe;
use App\Entity\Evenement;
use App\Entity\Repas;
use App\Form\RepasType;
use App\Repository\BebeRepository;
use App\Repository\ConseilRepository;
use App\Repository\RepasRepository;
use App\Repository\UserRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/repas")
 */
class RepasController extends AbstractController
{
    /**
     * @Route("/", name="repas_index", methods={"GET"})
     */
    // public function index(RepasRepository $repasRepository): Response
    // {
    //     return $this->render('repas/index.html.twig', [
    //         'repas' => $repasRepository->findAll(),
    //     ]);
    // }

    /**
     * @Route("/ajouter", name="repas_new", methods={"GET","POST"})
     */
    public function new(Request $request, ConseilRepository $conseilRepo): Response
    {
        // Récupération des conseils
        $conseilsBiberon = $conseilRepo->findBy([
            'nom' => "Autour du biberon"
        ]);

        $conseilsDivers = $conseilRepo->findBy([
            'nom' => "Diversification"
        ]);

        $repa = new Repas();
        $form = $this->createForm(RepasType::class, $repa);
        $form->handleRequest($request);

        $utilisateur = $this->getUser();
        
        if($utilisateur) {
            $pseudo = $utilisateur->getPseudo();
            $bebe = $utilisateur->getBebe();
            // Calcul de l'age 
            $dateNaissance = $bebe->getDateNaissance();
            $dateNow = new \DateTime('now');
            $age = date_diff($dateNow, $dateNaissance)->m;

            $prenom = $bebe->getPrenom();

        } else {
            $age = 0;
            $bebe = "mumu";
            $prenom = "Le prénom de bébé";
            $dateNaissance = 0;
            $pseudo = "";
        }

        if ($form->isSubmitted() && $form->isValid()) {
            
            // création d'évènement et le lier au repas
            $event = new Evenement();
            // getUser info de la session
            // $utilisateur = $this->getUser();

            // $bebe = $utilisateur->getBebe();

            // Convertir la date et la mettre à l'heure française dans le fichier twig.yaml
            $date = new \DateTime('now');
            
            // Remplir l'instance event avec tous les champs évènement :
            $event
                ->setUser($utilisateur)
                ->setBebe($bebe)
                ->setRepas($repa)
                ->setDodo(false)
                ->setHeureDebut($date)
                // ->setHygiene() //pas besoin car il peut être NULL
                // ->setHeureFin() //pas besoin car il peut être NULL  
            ;
          
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($repa);
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('repas/new.html.twig', [
            'repa' => $repa,
            'conseilsBiberon' => $conseilsBiberon,
            'conseilsDivers' => $conseilsDivers,
            'form' => $form,
            'prenom' => $prenom,
            'dateNaissance' => $dateNaissance,
            'age' => $age,
            'pseudo' => $pseudo
        ]);
    }

    /**
     * @Route("/{id}", name="repas_show", methods={"GET"})
     */
    public function show(Repas $repa): Response
    {
        return $this->render('repas/show.html.twig', [
            'repa' => $repa,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="repas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Repas $repa): Response
    {
        $form = $this->createForm(RepasType::class, $repa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('repas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('repas/edit.html.twig', [
            'repa' => $repa,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="repas_delete", methods={"POST"})
     */
    public function delete(Request $request, Repas $repa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$repa->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($repa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('repas_index', [], Response::HTTP_SEE_OTHER);
    }
}


 