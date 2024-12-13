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
    public function browse(string $slug): Response{
        $title = strtoupper($slug);
        return new Response('Genre: '. $slug);
    }
}