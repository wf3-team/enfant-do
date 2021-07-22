<?php

namespace App\Controller;

use App\Entity\Bebe;
use App\Form\BebeType;
use App\Repository\BebeRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/bebe")
 */
class BebeController extends AbstractController
{

    /**
     * @Route("/", name="bebe_index", methods={"GET"})
     */
    public function index(BebeRepository $bebeRepository, UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $bebe = $user->getBebe();

        // dd($bebe);
        return $this->render('bebe/index.html.twig', [
            'bebes' => $bebeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/inscription", name="bebe_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $bebe = new Bebe();
        $form = $this->createForm(BebeType::class, $bebe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $actualuser = $userRepository->findOneBy([
                'id'=> $user->getId()
            ]);
            // dd($actualuser);
            $actualuser->setBebe($bebe);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($actualuser);
            $entityManager->persist($bebe);
            $entityManager->flush();

            return $this->redirectToRoute('bebe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bebe/new.html.twig', [
            'bebe' => $bebe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'bebe_show', methods: ['GET'])]
    public function show(Bebe $bebe): Response
    {
        return $this->render('bebe/show.html.twig', [
            'bebe' => $bebe,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="bebe_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Bebe $bebe): Response
    {
        $form = $this->createForm(BebeType::class, $bebe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bebe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bebe/edit.html.twig', [
            'bebe' => $bebe,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="bebe_delete", methods={"POST"})
     */
    public function delete(Request $request, Bebe $bebe): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bebe->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($bebe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('bebe_index', [], Response::HTTP_SEE_OTHER);
    }
}

