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
        return $this->render('conseil/index.html.twig', [
            'conseils' => $conseil,
        ]);
    }
}
