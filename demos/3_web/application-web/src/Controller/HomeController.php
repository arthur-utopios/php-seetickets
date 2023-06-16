<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'prenom' => 'toto',
            'users' => ['jean', 'tata', 'titi'],
        ]);
    }

    #[Route('/hello/{nom}', name: 'hello')]
    public function sayHello($nom): Response
    {
        return new Response("<h1>Hello $nom</h1>");
    }
}
