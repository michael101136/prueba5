<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function nosotros(){
        return view('frondend/nosotros');
    }
    public function viewEquipoTrabajo()
    {
        return view('frondend/equipoTrabajo');
    }
    public function servicios()
    {
        return view('frondend/servicios');
    }
    public function contacto(){
        return view('frondend/contacto');
    }
}
