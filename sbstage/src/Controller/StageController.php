<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;


class StageController extends AbstractController
{
    #[Route('/stage', name: 'app_stage')]
    public function index(Stage $stage): Response
    {
        return $this->render('stage/index.html.twig', [
            'stages' => $stage->get(id) ,
        ]);
    }
}
