<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionprofController extends AbstractController
{
    #[Route('/gestionprof', name: 'app_gestionprof')]
    public function index(): Response
    {
        return $this->render('gestionprof/index.html.twig', [
            'controller_name' => 'GestionprofController',
        ]);
    }
}
