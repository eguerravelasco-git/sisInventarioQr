@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Crear Categoria</h2></div>

                <div class="card-body">
                                   
                    <form action="{{ route('categoria.store')}}" method="POST">
                     @csrf

                     <div class="container">

                        <h3>Datos Requeridos</h3>

                         <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="name" 
                            placeholder="Nombre"
                            name="nombre"
                            value="{{ old('nombre')}}"
                            >
                          </div>
                          <div class="form-group">
                            
                            <textarea class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion" rows="3"> 
                             {{ old('descripcion')}}
                            </textarea>
                          </div>

                          <hr>

                          <h3>Estado</h3>
                           <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="estado" 
                            placeholder="Estado"
                            name="estado"
                            value="{{ old('estado')}}"
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
