<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebAppController extends AbstractController
{
    #[Route('/web', name: 'app_web_app')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
