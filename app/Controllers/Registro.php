<?php

namespace App\Controllers;

class Registro extends BaseController
{
    public function index()
    {
        $data = ['titulo' => 'Registro'];
        echo view ('header', $data);
        echo view ('registro');
        echo view ('footer');
        
    }
}
