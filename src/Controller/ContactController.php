<?php

namespace App\Controller;

use PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(): Response
    {
        //return $this->json([
        return $this->render('contact/index.html.twig', [
            'firstname' => 'Claire',
        ]);

    }
}
