<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Inicio'
        ];
        return view('Pages/inicio',$data);
    }

    public function contacto(){
        return ' contenido de la vista';
    }
}
