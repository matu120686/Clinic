<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $filable = [

        'name','slug','description'
    ];

    //RELACIONES

    public function role(){
        
        return $this->belongsTo('App\Role'); 
    }

    public function users(){

        return $this->belongsToMany('App\User')->withTimestamps();
    }

    //ALMACENAMIENTO

    //VALIDACION

    //RECUPERACION DE INFORMACION 

    //OTRAS OPERACIONES 
}
