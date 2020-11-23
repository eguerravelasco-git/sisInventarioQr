@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Editar Categoria</h2></div>

                <div class="card-body">
                   @include('custom.message')


                
                    <form action="{{ route('categoria.update', $categorias->id)}}" method="POST">
                     @csrf
                     @method('PUT')

                     <div class="container">

                        <h3>Datos Requeridos</h3>

                         <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="nombre" 
                            placeholder="Name"
                            name="nombre"
                            value="{{ old('nombre', $categorias->nombre)}}"
                            >
                          </div>
                          <div class="form-group">                            
                            <input type="text" 
                            class="form-control" 
                            id="descripcion" 
                            placeholder="descripcion"
                            name="descripcion"
                            value="{{ old('descripcion' , $categorias->descripcion)}}"
                            >
                          </div>
                          <div class="form-group">                            
                            <input type="text" 
                            class="form-control" 
                            id="estado" 
                            placeholder="estado"
                            name="estado"
                            value="{{ old('estado' , $categorias->estado)}}"
                            >
                          </div>
                          
                          

                          
                          <hr>
                          <input class="btn btn-primary" type="submit" value="Save">









                     </div>




















                    </form>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection
