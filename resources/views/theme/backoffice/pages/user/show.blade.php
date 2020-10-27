@extends('theme.backoffice.layouts.admin')

@section('title',$user->name)
    
@section('head')
@section('breadcrumbs')  
{{--<li><a href=""></a></li>--}} 
<li><a href="{{route ('backoffice.user.index')}}">Usuarios del Sistema</a></li> 
<li>{{$user->name}}</li>
@endsection

@section('dropdown_settings') 
{{--<li><a href="{{route ('backoffice.user.index')}}">users del Sistema</a></li> --}}
<li><a href="{{route ('backoffice.role.create')}}" class="grey-text text-darken-2">Crear Usuario</a></li>     

@endsection

@endsection
@section('content')
        
    <div class="section">
        <p class="caption"><strong>Usuario:</strong> {{$user->name}}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 ">
                    <div class="card">
                        <div class="card-content">
                            <span class=" card-title">{{$user->name}}</span>
                           
                        </div>                     
                        
                        <div class="card-action">
                           <a href="{{route('backoffice.user.edit',$user)}}" "> EDITAR</a>                               
                            <a href="#" onclick="enviar_formulario()"> ELIMINAR</a>                                                    
                        </div> 

                    </div>             
                </div>

                <div class="col s12 m4 ">
                    @include('theme.backoffice.pages.user.includes.user_nav')          
                </div>


            </div>            

        </div>

    </div>
        <form action="{{route('backoffice.user.destroy',$user)}}" method="post" name="delete_form">

            {{csrf_field()}}

            {{method_field('DELETE')}}

        </form>
@endsection

@section('foot')    


    <script>
        function enviar_formulario(){
            Swal.fire({
                
                title: "Deseas eliminar este Usuario",
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
    