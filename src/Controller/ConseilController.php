<?php

namespace App\Controller;

use App\Repository\ConseilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConseilController extends AbstractController
{
    /**
     * @Route("/conseil", name="conseil")
     */
    public function index(ConseilRepository $conseilRepo): Response
    {
        $conseil = $conseilRepo->findAll();

        //récupération de l'utilisateur
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
        return $this->render('conseil/index.html.twig', [
            'conseils' => $conseil,
            'prenom' => $prenom,
            'dateNaissance' => $dateNaissance,
            'age' => $age,
            'pseudo' => $pseudo
        ]);
    }
}
