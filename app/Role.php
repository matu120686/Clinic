<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [

        'name','description','slug'
    ];

    //RELACIONES

    public function permissions(){

        return $this->hasMany('App\Permission'); //Este Rol tiene muchos permisos
    }

    public function users(){
        
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    //ALMACENAMIENTO

    public function store($request){
        
        $slug = str_slug($request->name,' - ');
        alert('Exito','Se registró correctamente', 'success')->showConfirmButton('Ok');       

        return self::create($request->all() + [
            'slug' => $slug, 
        ] );
       

    }

    public function my_update($request){
        
        $slug = str_slug($request->name,' - ');

         self::update($request->all() + [
            'slug' => $slug, 
        ]);
        alert('Exito','El rol ha actualizado', 'success')->showConfirmButton('Ok');
       
 
    }

    //VALIDACION

    //RECUPERACION DE INFORMACION 

    //OTRAS OPERACIONES 



}
