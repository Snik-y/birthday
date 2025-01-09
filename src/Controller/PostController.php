<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="app_post")
     */
    public function index(): Response
    {
        include __DIR__.'/../../data/posts.php';
        $posts=json_decode($posts);
        dump($posts);
        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }
    
    /**
     * @Route("/post/{id}", name="app_post_title")
     */
    public function Title($id): Response
    {
        include __DIR__.'/../../data/posts.php';
        $posts=json_decode($posts);
        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
    * @Route("/post/{tags}", name="app_post_category")
    */
    public function Category($id): Response
    {
        include __DIR__.'/../../data/posts.php';
        $posts=json_decode($posts);
        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
