@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Crear Usuario</h2></div>

                <div class="card-body">
                   @include('custom.message')

                    <form action="{{ route('user.store')}}" method="POST">
                     @csrf
                     

                     <div class="container">

                        <h3>Datos Requeridos</h3>

                         <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="name" 
                            placeholder="Name"
                            name="name"
                            value="{{ old('name')}}"
                            >
                          </div>
                          <div class="form-group">                            
                            <input type="text" 
                            class="form-control" 
                            id="email" 
                            placeholder="Email"
                            name="email"
                            value="{{ old('email' )}}"
                            >
                          </div>

                          <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                            
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password-confirm">
                            </div>
                       
                          
                          <div class="form-group">                            
                            <select  class="form-control"  name="roles" id="roles">
                              @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                  @isset($user->roles[0]->name)
                                    @if($role->name ==  $user->roles[0]->name)
                                      selected
                                    @endif
                                  @endisset
                                
                                
                                >{{ $role->name }}</option>
                              @endforeach
                            </select>
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
