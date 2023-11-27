<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailrenduController extends AbstractController
{
    #[Route('/detailrendu', name: 'app_detailrendu')]
    public function index(): Response
    {
        return $this->render('detailrendu/index.html.twig', [
            'controller_name' => 'DetailrenduController',
        ]);
    }
}
