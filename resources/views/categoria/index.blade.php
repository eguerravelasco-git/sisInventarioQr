@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Lista de Categorias</h2></div>

                <div class="card-body">
                
                    <a class="btn btn-info" href="{{ route('categoria.create')}}">Nuevo</a> 
                    <br><br>
                             
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Estado</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            
                            @foreach ($categorias as $categoria)
                            <tr>
                                <th scope="row">{{ $categoria->id}}</th>
                                <td>{{ $categoria->nombre}}</td>
                                <td>{{ $categoria->descripcion}}</td>
                                <td>{{ $categoria->estado}}</td>                            
                                 
                                <td> 
                                
                                  <a class="btn btn-success" href="{{ route('categoria.edit',$categoria->id)}}">Editar</a> 
                                
                                </td>  

                                <td> 
                                
                                  <form action="{{ route('categoria.destroy',$categoria->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                  </form>
                               

                                </td>  
                            </tr>      
                            @endforeach
                            

                            
                          
                         
                        </tbody>
                      </table>

                      {{ $categorias->links() }}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
