<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function nosotros(){
        return view('frondend/nosotros');
    }
    public function equipoTrabajo()
    {
        return view('frondend/equipoTrabajo');
    }
    public function organigrama()
    {
        return view('frondend/organigrama');
    }
    public function servicios()
    {
        return view('frondend/servicios');
    }
    public function contacto(){
        return view('frondend/contacto');
    }
}
