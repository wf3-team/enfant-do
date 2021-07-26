<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoinListeController extends AbstractController
{
    /**
     * @Route("/soin/liste", name="soin_liste")
     */
    public function index(CallApiService $callApiService): Response
    {
        // dd($callApiService->getHopitaux());
        return $this->render('soin_liste/index.html.twig', [
            'data' => $callApiService->getHopitaux()
        ]);
    }
}
