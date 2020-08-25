<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $filable = [

        'name','slug','description'
    ];

    //RELACIONES

    public function permissions(){

        return $this->hasMany('App\Permission'); //Este Rol tiene muchos permisos
    }

    public function users(){
        
        $this->belongsToMany('App\User')->withTimestamps();
    }

    //ALMACENAMIENTO

    //VALIDACION

    //RECUPERACION DE INFORMACION 

    //OTRAS OPERACIONES 



}
