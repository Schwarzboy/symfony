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

    #[Route('/browse')]
    public function browse(): Response{
        return new Response('This is a second page');
    }
}