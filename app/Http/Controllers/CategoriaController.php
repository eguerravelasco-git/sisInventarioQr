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
       $categorias = Categoria::where('estado','=',1)->paginate(10);
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
        
            

       
        return redirect()->route('categoria.index')->with('status_success','Registro creado correctamente!');

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

        $categorias= Categoria::where('id',$id)->firstOrFail();
        return view('categoria.edit', compact('categorias'));
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
        $cat= Categoria::findOrFail($id);
        

        $request->validate([
            'nombre' => 'required|max:50|unique:categorias,nombre,'.$cat->id,
            'descripcion' => 'required|max:50|unique:categorias,descripcion,'.$cat->id,
            'estado' => 'required|max:50|:categorias,estado,'.$cat->id,

        ]);

    
        $cat->fill($request->all())->save();

        
        
        return redirect()->route('categoria.index')->with('status_success','Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
       
        $categoria->delete();

        return redirect()->route('categoria.index')
            ->with('status_success','Categoria Eliminada Exitosamente'); 
    }
}
