<?php

namespace App\Controller;

use App\Form\ContactFormType;
use PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request): Response
    {
        $form = $this -> createForm(ContactFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
            dd($data);
        }
        //return $this->json([
        return $this->render('contact/index.html.twig', [
            'firstname' => 'Claire',
            'form' => $form->createView(),
        ]);

        }
}