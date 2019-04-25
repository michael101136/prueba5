<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categoria;
class PublicController extends Controller
{
    public function nosotros(){
        $data=Categoria::all();
        return view('frondend/nosotros',['data'=>$data]);
    }
    public function equipoTrabajo()
    {
        $data=Categoria::all();
        return view('frondend/equipoTrabajo',['data'=>$data]);
    }
    public function organigrama()
    {
        $data=Categoria::all();
        return view('frondend/organigrama',['data'=>$data]);
    }
    public function servicios($servicio)
    {
        $data=Categoria::all();
        return view('frondend/servicios',['data'=>$data]);
    }
    public function contacto(){
        $data=Categoria::all();
        return view('frondend/contacto',['data'=>$data]);
    }

    public function principal()
    {
        $data=Categoria::all();
        return view('frondend/inicio',['data'=>$data]);
    }
}
