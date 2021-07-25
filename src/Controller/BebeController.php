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
use Symfony\Component\String\Slugger\SluggerInterface;

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
    public function new(Request $request, UserRepository $userRepository, SluggerInterface $slugger): Response
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

            // si il y a une image il faut la placer la ou il faut
            $imagesDirectory = "image/uploads/";
            // donc, on commence par récuperer ce qui a été uploadé
            $imageFile = $form->get('photo')->getData();
            // on test, au cas ou
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // on crée un nom unique de stockage du fichier
                $safeFileName = $slugger->slug($originalFilename);
                $finalFilename = $safeFileName . '-' . uniqid() . '.' . $imageFile->guessExtension();
                // on essaye de deplacer le fichier à sa place finale, sur le serveur
                $imageFile->move($imagesDirectory, $finalFilename);
                // et bien sur on n'oubli pas de mettre à jour le path dans l'objet image
                // petite astuce pour éviter d'avoir à modifier les vues
                $fichierCheminComplet = "/$imagesDirectory$finalFilename";
                $bebe->setPhoto($fichierCheminComplet);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($actualuser);
            $entityManager->persist($bebe);
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bebe/new.html.twig', [
            'bebe' => $bebe,
            'form' => $form,
            'infosBebe' => $bebe
            // 'prenom' => $prenom,
            // 'dateNaissance' => $dateNaissance,
            // 'age' => $age,
            // 'pseudo' => $pseudo
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
    public function edit(Request $request, Bebe $bebe, SluggerInterface $slugger, UserRepository $userRepository): Response
    {
        $form = $this->createForm(BebeType::class, $bebe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $this->getUser();

            $actualuser = $userRepository->findOneBy([
                'id'=> $user->getId()
            ]);

 
            // dd($actualuser);
            $actualuser->setBebe($bebe);


            // si il y a une image il faut la placer la ou il faut
            $imagesDirectory = "image/uploads/";
            // donc, on commence par récuperer ce qui a été uploadé
            $imageFile = $form->get('photo')->getData();
            // on test, au cas ou
            if ($imageFile) {

                $oldFile = $bebe->getPhoto();

                if ($oldFile != "") {
                    unlink($oldFile);
                }

                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // on crée un nom unique de stockage du fichier
                $safeFileName = $slugger->slug($originalFilename);
                $finalFilename = $safeFileName . '-' . uniqid() . '.' . $imageFile->guessExtension();
                // on essaye de deplacer le fichier à sa place finale, sur le serveur
                $imageFile->move($imagesDirectory, $finalFilename);
                // et bien sur on n'oubli pas de mettre à jour le path dans l'objet image
                // petite astuce pour éviter d'avoir à modifier les vues
                $fichierCheminComplet = "/$imagesDirectory$finalFilename";
                $bebe->setPhoto($fichierCheminComplet);
            }
            
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

