<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /* Ajoute ces blocs pour créer les liens vers tes autres pages */
    
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('home/index.html.twig'); 
    }

    #[Route('/competence', name: 'app_competence')]
    public function competence(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/index.html.twig');
    }
}