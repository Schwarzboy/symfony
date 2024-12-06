<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class wordController
{
    #[Route('/')]
    public function homepage(){
        return new Response('Learning the Word');
    }

    #[Route('/browse/{book}')]
    public function browse (string $book = null)
    {
        if($book){
            $title = strtoupper($book);
            $title = 'You are reading:' . $title;
        } else {
            $title = 'Bible Book List';
        }
        return new Response( $title);
        
    }
}