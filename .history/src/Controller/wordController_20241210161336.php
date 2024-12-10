<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class wordController extends AbstractController
{
    #[Route('/')]
    public function homepage(){
        
        $books = [
            '1'=>'1. Mose',
            '2'=>'2. Mose',
            '3'=>'3. Mose',
            '4'=>'Mathäus',
            '5'=>'Mark',
            '6'=>'Lukas',
            '7'=>'Johannes',
        ];
        dd($books);
        return $this->render('word/home.html.twig', [
            'title' => 'In the Beginning was the word...',
            'books' => $books,
        ]);
       // return new Response('In the Beginning was the word...');
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