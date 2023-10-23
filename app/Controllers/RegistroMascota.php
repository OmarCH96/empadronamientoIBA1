<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class RegistroMascota extends BaseController
{
    public function index()
    {
        $data = ['titulo' => 'Registro de mascotas'];
        echo view ('header', $data);
        echo view ('user/registroMascota');
        echo view ('footer');
        
    }
}
