<div class="collection">
    {{--<a href="#!" class="collection-item active">Alvin</a>--}}
<a href="{{route ('backoffice.user.show',$user) }}" class="collection-item active">{{$user->name}}</a>
    <a href="" class="collection-item">Asignar roles</a>
</div>  