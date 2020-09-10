<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $fillable = [

        'name','slug','description','role_id'
    ];

    //RELACIONES

    public function role(){
        
        return $this->belongsTo('App\Role'); 
    }

    public function users(){

        return $this->belongsToMany('App\User')->withTimestamps();
    }

    //ALMACENAMIENTO

    public function store($request){

        $slug = str_slug($request->name,'-');

        alert('Exito','Se registró correctamente', 'success')->showConfirmButton('Ok');       

        return self::create($request->all() + [
            'slug' => $slug, 
        ] );
    }

    //VALIDACION

    //RECUPERACION DE INFORMACION 

    //OTRAS OPERACIONES 
}
