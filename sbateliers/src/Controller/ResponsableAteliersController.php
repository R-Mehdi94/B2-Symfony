<?php

namespace App\Controller;

use App\Entity\ResponsableAteliers;
use App\Form\ResponsableAteliersType;
use App\Repository\ResponsableAteliersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/responsable/ateliers')]
class ResponsableAteliersController extends AbstractController
{
    #[Route('/', name: 'app_responsable_ateliers_index', methods: ['GET'])]
    public function index(ResponsableAteliersRepository $responsableAteliersRepository): Response
    {
        return $this->render('responsable_ateliers/index.html.twig', [
            'responsable_ateliers' => $responsableAteliersRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_responsable_ateliers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $responsableAtelier = new ResponsableAteliers();
        $form = $this->createForm(ResponsableAteliersType::class, $responsableAtelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($responsableAtelier);
            $entityManager->flush();

            return $this->redirectToRoute('app_responsable_ateliers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('responsable_ateliers/new.html.twig', [
            'responsable_atelier' => $responsableAtelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_responsable_ateliers_show', methods: ['GET'])]
    public function show(ResponsableAteliers $responsableAtelier): Response
    {
        return $this->render('responsable_ateliers/show.html.twig', [
            'responsable_atelier' => $responsableAtelier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_responsable_ateliers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ResponsableAteliers $responsableAtelier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResponsableAteliersType::class, $responsableAtelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_responsable_ateliers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('responsable_ateliers/edit.html.twig', [
            'responsable_atelier' => $responsableAtelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_responsable_ateliers_delete', methods: ['POST'])]
    public function delete(Request $request, ResponsableAteliers $responsableAtelier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$responsableAtelier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($responsableAtelier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_responsable_ateliers_index', [], Response::HTTP_SEE_OTHER);
    }
}
