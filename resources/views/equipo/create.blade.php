@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Crear Equipo</h2></div>

                <div class="card-body">
                                   
                    <form action="{{ route('equipo.store')}}" method="POST">
                     @csrf

                     <div class="container">

                        <h3>Datos Requeridos</h3>

                        <div class="form-group">                            
                            <select  class="form-control"  name="categorias" id="categorias">
                              @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}"
                                  @isset($equipo->categorias[0]->nombre)
                                    
                                  @endisset
                                                                
                                >{{ $categoria->nombre }}</option>
                              @endforeach
                            </select>
                          </div>

                         <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="nombre" 
                            placeholder="Nombre"
                            name="nombre"
                            value="{{ old('nombre')}}"
                            >
                          </div>

                          <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="modelo" 
                            placeholder="Modelo"
                            name="modelo"
                            value="{{ old('modelo')}}"
                            >
                          </div>

                          <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="serie" 
                            placeholder="Serie"
                            name="serie"
                            value="{{ old('serie')}}"
                            >
                          </div>
                          <div class="form-group">
                            
                            <textarea class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion" rows="3"> 
                             {{ old('descripcion')}}
                            </textarea>
                          </div>

                          <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="codigoqr" 
                            placeholder="Codigo QR"
                            name="codigoqr"
                            value="{{ old('codigoqr')}}"
                            >
                          </div>

                         
                          <div class="form-group" hidden="{ display: none; }">                            
                            <input type="text" class="form-control" 
                            id="estado" 
                            placeholder="Estado"
                            name="estado"
                            value="1"
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
