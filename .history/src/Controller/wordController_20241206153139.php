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
    public function browse (string $book = null){

        if($book){
            return new Response('You are reading: ' . $book);
        } else{
            $bookList = 'Select a bible Book';
        }
        
        
    }
}