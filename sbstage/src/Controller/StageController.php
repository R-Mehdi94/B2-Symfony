<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Animateur;
use App\Repository\StageRepository;
use App\Repository\AnimateurRepository;
use Symfony\Component\HttpFoundation\JsonResponse;




class StageController extends AbstractController
{
    #[Route('/stages', name: 'voirTous', methods: ['GET'])]
    public function voirTous(StageRepository $stage): Response
    {
        return $this->render('stage/index.html.twig', [
            'stages' => $stage->findAll() ,
        ]);
    }

    #[Route('/stages/{idAnimateur}', name: 'voirStagesAnimateurs')]
    public function voirStagesAnimateurs($idAnimateur, AnimateurRepository $stage): Response
    {
        return $this->render('stage/base.html.twig', [
            'stages' => $stage->getStageParAnimateurs($idAnimateur) ,
        ]);
    }
    
}