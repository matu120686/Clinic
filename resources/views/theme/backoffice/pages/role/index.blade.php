@extends('theme.backoffice.layouts.admin')

@section('title', 'Roles del Sistema')
    
@section('head')

@endsection

@section('content')      

    <div class="section">
        <div class="divider"></div>

        <div id="hoverable-table">
        <h4 class="header">Usuarios y Roles</h4>
            <div class="row">
                <div class="col s12">
                <p> <code class=" language-markup"></code> La siguiente tabla contiene los Roles para la asignacion de usuarios</p>
                </div>
                <div class="col s12">
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

    


@endsection

@section('foot')    
@endsection
    