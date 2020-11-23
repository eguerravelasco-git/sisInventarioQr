@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Lista de Equipos</h2></div>

                <div class="card-body">
                
                    <a class="btn btn-info" href="{{ route('equipo.create')}}">Nuevo</a> 
                    <br><br>
                             
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>                        
                            <th scope="col">Nombre</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Codigo QR</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Categoria</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            
                            @foreach ($equipos as $equipo)
                            <tr>
                                <th scope="row">{{ $equipo->id}}</th>
                                
                                <td>{{ $equipo->nombre}}</td>
                                <td>{{ $equipo->modelo}}</td>
                                <td>{{ $equipo->serie}}</td>
                                <td>{{ $equipo->descripcion}}</td>
                                <td>{{ $equipo->codigoqr}}</td>
                                <td>{{ $equipo->estado}}</td>
                                <td>
                                @isset( $equipo->categorias[0]->nombre )
                                  {{ $equipo->categorias[0]->nombre}}
                                @endisset                                
                                </td>                            
                                
                                <td> 
                                
                                  <a class="btn btn-success" href="{{ route('equipo.edit',$equipo->id)}}">Editar</a> 
                                
                                </td>  

                                <td> 
                                
                                  <form action="{{ route('equipo.destroy',$equipo->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                  </form>
                               

                                </td>  
                            </tr>      
                            @endforeach
                            

                            
                          
                         
                        </tbody>
                      </table>

                      {{ $equipos->links() }}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
