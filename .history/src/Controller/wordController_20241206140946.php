<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class wordController
{
    #[Route('/')]
    public function homepage(){
        die('Hallo  Evrard');
    }
}