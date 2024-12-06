<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class wordController
{
    #[Route('/ev')]
    public function homepage(){
        die('Hallo  Evrard');
    }
}