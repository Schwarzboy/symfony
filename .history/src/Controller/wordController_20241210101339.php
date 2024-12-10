<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class wordController
{
    #[Route('/')]
    public function homepage(){
        return new Response('In the Beginning was the word...');
    }

    #[Route('/browse/{book}')]
    public function browse (string $book = null)
    {
        if($book){
            $title = 'You are reading: ' . $book;
        } else {
            $title = 'Bible Book List';
        }
        return new Response( $title);
        
    }
}