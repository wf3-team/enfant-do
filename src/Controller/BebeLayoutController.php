<?php

namespace App\Controller;

use App\Entity\Bebe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BebeLayoutController extends AbstractController
{
    
    public function infoBebe(): Response
    {
        $user = $this->getUser();
        $bebe = $user->getBebe();

        $date = new \DateTime('now');

        //     Calcul de l'age 
        //     $dateNaissance = $bebe->getDateNaissance();
        //     $date = new \DateTime('now');
        //     $age = date_diff($date, $dateNaissance)->m;

        if(!$bebe) {
            $bebe = new Bebe();
            // Changer par une image
            $bebe->setPrenom("L'enfant Do")
                ->setDateNaissance($date)
                ->setPhoto("/image/dodo/photo-dodo1.jpg");
        }

        return $this->render('bebe_layout/_infoBebe.html.twig', [
            'bebe' => $bebe,
        ]);
    }
}
