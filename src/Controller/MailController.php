<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends AbstractController
{
    #[Route('/mail', name: 'app_m_ai_mail')]
    #[Route('/mail/{param}', name: 'app_m_ai_mail')]
    public function index(string $param = null): Response
    {
        dd($param);
        return $this->render('mail/index.html.twig', [
            'controller_name' => 'MAiMailController',
        ]);
    }
}
