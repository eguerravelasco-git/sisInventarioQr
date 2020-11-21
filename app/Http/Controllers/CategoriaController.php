<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sistema\Models\Categoria;
use Illuminate\Support\Facades\Gate;



class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$nombre = $request->get('nombre');
       $categorias = Categoria::orderBy('nombre')->paginate(2);
        return view('categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $cat = new Categoria();
        $cat->nombre        = $request->nombre;
        $cat->descripcion   = $request->descripcion;
        $cat->estado        = $request->estado;
        $cat->save();        
        
        //return $cat;        

        Categoria::create($request->all());

        
        /*$request->validate([
            'nombre' => 'required|max:50|unique:categorias,nombre',
            'descripcion' => 'required|max:50|unique:categorias,descripcion',
            'estado'=>'required|max:1|unique:categorias,estado'

        ]);

        Categoria::create($request->all());*/

        return redirect()->route('categoria.index')->with('datos','Registro creado correctamente!');

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
