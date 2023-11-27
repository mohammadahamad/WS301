<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionadminController extends AbstractController
{
    #[Route('/gestionadmin', name: 'app_gestionadmin')]
    public function index(): Response
    {
        return $this->render('gestionadmin/index.html.twig', [
            'controller_name' => 'GestionadminController',
        ]);
    }
}
