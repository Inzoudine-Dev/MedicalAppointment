<?php

namespace App\Controller\users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppointmentController extends AbstractController
{
    #[Route('/home/appointment', name: 'app_appointment')]
    public function index(): Response
    {
        return $this->render('views/users/appointment/index.html.twig', [
            'controller_name' => 'AppointmentController',
        ]);
    }
}
