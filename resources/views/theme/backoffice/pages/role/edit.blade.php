@extends('theme.backoffice.layouts.admin')

@section('title','Editar Rol:', $role->name)
    
@section('head')

@endsection
@section('content')

    <div class="section">
        <p class="caption">Edición del Rol</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">                                
                            <span class="card-title">Crear Rol</span>
                            <div class="row">
                                <form  class="col s12" method="POST" action="{{route('backoffice.role.update',$role)}}">

                                    {{ csrf_field() }}
                                    {{method_field('PUT')}}
                                
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="name" type="text" name="name" value="{{$role->name}}">
                                            <label for="name">Nombre</label>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>      
                                
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="description" class="materialize-textarea" name="description">{{$role->description}}</textarea>
                                            <label for="description">Descripción</label>
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit">Actualizar
                                                <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div> 
        </div>
    </div>

@endsection

@section('foot')    
@endsection
    
