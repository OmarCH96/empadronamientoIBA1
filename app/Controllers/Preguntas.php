<?php

namespace App\Controllers;

class Preguntas extends BaseController
{
    public function index()
    {
        $data = ['titulo' => 'Preguntas'];
        echo view ('header', $data);
        echo view ('preguntas');
        echo view ('footer');
        
    }
}
