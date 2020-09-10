<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdadateRequest;
use App\Permission;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Role $role)
    {
        //Pendiente: Añadir Autorizazión  
        return view('theme.backoffice.pages.role.index',[
            'roles' => Role::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('theme.backoffice.pages.role.create');
    }

    /**
     * Store a newly created resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Role $role)
    {
         $role = $role->store($request);
         //return view('theme.backoffice.pages.role.create');
         return redirect()->route('backoffice.role.show',$role);
        //dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role )
    {
        
        return view('theme.backoffice.pages.role.show',[
            'role' => $role,
            'permissions' => $role->permissions
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
        return view('theme.backoffice.pages.role.edit',[
            'role' => $role,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdadateRequest $request, Role $role)
    {
        $role->my_update($request);        
        return redirect()->route('backoffice.role.show',$role);
        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {    
            $role->delete();
            alert('Éxito','Rol eliminado', 'success')->showConfirmButton('Ok');
            return redirect()->route('backoffice.role.index');

            
    
    }
}
