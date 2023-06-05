<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_page1')]
    public function page1(): Response
    {
        return $this->render('test/page1.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/profil', name: 'app_page2')]
    public function page2(): Response
    {
        return $this->render('test/page2.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
