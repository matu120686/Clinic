@extends('theme.backoffice.layouts.admin')

@section('title', 'Roles del Sistema')
    
@section('head')

@endsection

@section('breadcrumbs')  
{{--<li><a href=""></a></li>--}} 
<li><a href="{{route ('backoffice.role.index')}}">Roles del Sistema</a></li> 
@endsection

@section('dropdown_settings')
{{--<li><a href="{{route ('backoffice.role.index')}}">Roles del Sistema</a></li> --}}
<li><a href="{{route ('backoffice.role.create')}}" class="grey-text text-darken-2">Crear Rol</a></li>     

@endsection

@section('content')      

    <div class="section">
        <p class="caption"><strong>Roles del Sistema</strong></p>
        <div class="divider"></div>
        <div id="basic-form" class="section">

            <div id="hoverable-table">
                <h4 class="header">Usuarios y Roles</h4>
                    <div class="row">
                        <div class="col s12">   
                            <div class="card">
                                <div class="card-content">
                                    <table class="highlight">
                                        <thead>
                                            <tr>                                
                                                <th>Nombre</th>
                                                <th>Slug</th>
                                                <th>Descripción</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>              
                                            @foreach ($roles as $role)
                                            <tr>                           
                                            <td> <a href="{{route ('backoffice.role.show',$role)}}"> {{$role->name}} </a></td>
                                            <td>{{$role->slug}}</td>
                                            <td>{{$role->description}}</td>
                                            <td><a href="{{route('backoffice.role.edit',$role)}}">Editar</a></td>
                                        
                                            </tr>
                                            @endforeach                                      
                                        
                                        
                                        </tbody>
                                    </table>
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
    