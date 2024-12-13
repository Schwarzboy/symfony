<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController 
{
    #[Route('/')]
    public function homepag(): Response
    {
        return new Response('Title : Something');
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