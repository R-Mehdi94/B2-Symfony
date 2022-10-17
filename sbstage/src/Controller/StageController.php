<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Animateur;
use App\Repository\StageRepository;



class StageController extends AbstractController
{
    #[Route('/stage', name: 'voirTous', methods: ['GET'])]
    public function index(StageRepository $stage): Response
    {
        return $this->render('stage/index.html.twig', [
            'stages' => $stage->findAll() ,
        ]);
    }

    #[Route('/stage/{id}', name: 'voirStagesAnimateurs', methods: ['GET'])]
    public function show(Stage $stage): Response
    {
        return $this->render('stage/base.html.twig', [
            'stage' => $stage,
        ]);
    }
}