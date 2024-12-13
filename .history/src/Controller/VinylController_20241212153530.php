<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepag(): Response
    {
        return $this-> render('vinyl/homepage.html.twig',[
            'title' => 'Bible and Words'
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response{
        if($slug){
            $title ='Genre: ' . strtoupper($slug);
        } else {
            $title = 'All Genres';
        }
       
        return new Response($title);
    }
}