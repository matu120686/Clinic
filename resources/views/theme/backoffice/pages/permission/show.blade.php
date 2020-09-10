@extends('theme.backoffice.layouts.admin')

@section('title',$permission->name)
    
@section('head')
@section('breadcrumbs')  
{{--<li><a href=""></a></li>--}}
<li><a href="{{route('backoffice.role.index')}}">Roles del Sistema</a></li>
<li><a href="{{route('backoffice.role.show', $permission->role->slug)}}">Rol: {{$permission->role->name}}</a></li>
<li>{{$permission->name}}</li>
@endsection

@section('dropdown_settings') 
{{--<li><a href="{{route ('backoffice.role.index')}}">Roles del Sistema</a></li> --}}
<li><a href="{{route ('backoffice.permission.create')}}" class="grey-text text-darken-2">Crear Permiso</a></li>     

@endsection

@endsection
@section('content')
        
    <div class="section">
        <p class="caption"><strong>Permiso : </strong> {{$permission->name}}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class=" card-title">TXT </span>
                            <p><strong>Slug: </strong>{{$permission->slug}}</p>
                            <p><strong>Descripción: </strong>{{$permission->description}}</p>
                        </div>                     
                        
                        <div class="card-action">
                           <a href="{{route('backoffice.permission.edit',$permission)}}" > EDITAR</a>                               
                            <a href="#" onclick="enviar_formulario()"> ELIMINAR</a>                                                    
                        </div> 

                    </div>             
                </div>
            </div>
            

        </div>

    </div>
        <form action="{{route('backoffice.permission.destroy',$permission)}}" method="post" name="delete_form">

            {{csrf_field()}}

            {{method_field('DELETE')}}

        </form>
@endsection

@section('foot')    


    <script>
        function enviar_formulario(){
            Swal.fire({
                
                title: "Deseas eliminar este Rol",
                text: "Esta accion no se puede deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'               

            }).then((result) =>{

                if (result.value) {
                    
                    document.delete_form.submit();

                }else{
                    Swal.fire('Operaqcion cancelada', 'Resgitro no eliminado','error')
                }
            });             

        }
    </script>

@endsection
    