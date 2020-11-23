<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sistema\Models\Equipo;
use App\Sistema\Models\Categoria;
//use Illuminate\Support\Facades\Gate;



class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $equipos =  Equipo::with('categorias')->orderBy('id','Desc')->paginate(10);
        
        return view('equipo.index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias= Categoria::orderBy('nombre')->get();

        //return $roles;

        return view('equipo.create', compact('categorias', 'equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eq = new Equipo();
        $eq->categoria_id  = $request->categorias;
        $eq->nombre        = $request->nombre;
        $eq->modelo        = $request->modelo;
        $eq->serie        = $request->serie;
        $eq->descripcion   = $request->descripcion;
        $eq->codigoqr        = $request->codigoqr;
        $eq->estado        = $request->estado;
        $eq->save();        
        
            

        //Categoria::create($request->all());

        
        /*$request->validate([
            'nombre' => 'required|max:50|unique:categorias,nombre',
            'descripcion' => 'required|max:50|unique:categorias,descripcion',
            'estado'=>'required|max:1|unique:categorias,estado',

        ]);
        //$cat->fill($request->all())->save();

        Categoria::create($request->all())->save();*/

        return redirect()->route('equipo.index')->with('datos','Registro creado correctamente!');
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
        //
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
}
