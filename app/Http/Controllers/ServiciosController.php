<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categoria;
use App\CategoriaUser;
class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoServicio=Categoria::all();
        return view('admin.servicios.create',['tipoServicio'=>$tipoServicio]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $data=new CategoriaUser();
        $data->titulo=$request->titulo;
        $data->contenido=$request->contenido;
        $data->user_id='1';
        $data->categoria_id=$request->tiposervicio;
        $data->save();
        
        return redirect('/service');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data= CategoriaUser::find($id);
        $data=db::table('categoria_users')
        ->select ('*')
        ->get()[0];

        return  view('admin.servicios.update',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function servicios()
    {
        $data=db::table('categorias')
        ->select('categorias.nombre','categoria_users.titulo','categoria_users.id as idcategoriauser')
        ->join('categoria_users','categoria_users.categoria_id','=','categorias.id')
        ->get();
        // dd($data);
        return view('admin.servicios.index',['data'=>$data]);
    }
    public function servicetype()
    {
        $data=Categoria::all();

        return view('admin.servicios.tipoServicio',['data'=>$data]);
    }
    public function servicetypecreate(){

        return view('admin.servicios.tipoServicioCreate');
    }
    public function servicetypeinsert(Request $request)
    {
        $data=new Categoria();
        $data->nombre=$request->nombre;
        $data->descripcion=$request->descripcion;
        $data->save();
        return redirect()->route('services.index');
    }
}
