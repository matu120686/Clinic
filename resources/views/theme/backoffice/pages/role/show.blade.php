@extends('theme.backoffice.layouts.admin')

@section('title','Página demo')
    
@section('head')

@endsection
@section('content')
        
    <div class="section">
        <p class="caption"><strong>Rol : </strong> {{$role->name}}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class=" card-title">Usuarios con el Rol de : {{$role->name}} </span>
                            <p><strong>Slug: </strong>{{$role->slug}}</p>
                            <p><strong>Descripción: </strong>{{$role->description}}</p>
                        </div>                     
                        
                        <div class="card-action">
                           <a href="{{route('backoffice.role.edit',$role)}}" "> EDITAR</a>                               
                            <a href="#" onclick="enviar_formulario()"> ELIMINAR</a>                                                    
                        </div> 

                    </div>             
                </div>
            </div>

        </div>

    </div>
        <form action="{{route('backoffice.role.destroy',$role)}}" method="post" name="delete_form">

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
    