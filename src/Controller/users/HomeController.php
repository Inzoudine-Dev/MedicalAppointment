<?php

namespace App\Controller\users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{


    #[Route('/', name: 'app_index')]
    public function indexRedirect(): RedirectResponse
    {
        return $this->redirectToRoute('app_home');
    }


    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('views/users/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


}
