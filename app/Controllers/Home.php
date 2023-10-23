<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['titulo' => 'Home'];
        echo view ('header', $data);
        echo view ('inicio');
        echo view ('footer');
        
    }
}
