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
    public function browse (string $book){

        $bookTitle =u(str_replace('-','',$book)) -> bookTitle(true);
        return new Response('Bible book: ' . $bookTitle);
    }
}