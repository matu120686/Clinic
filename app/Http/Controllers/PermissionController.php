<?php

namespace App\Http\Controllers;
//use App\Role;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\Permission\StoreRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme.backoffice.pages.permission.index',[
            'permissions' => Permission::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        return view('theme.backoffice.pages.permission.create',[
            'roles' => Role::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Permission $permission)
    {
        $permission = $permission->store($request);

         return redirect()->route('backoffice.permission.show',$permission); //envia los datos el metodo show
        //dd($permission);
       
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //$role = $permission->role();
        
        return view('theme.backoffice.pages.permission.show', [
            'permission' => $permission,
            //'role' =>$role 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('theme.backoffice.pages.permission.edit',[
            'permission'=> $permission,
            'roles' => Role::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $role = $permission->role; 
        $permission->delete();
        alert('Éxito','El permiso fue eliminado','success')->showConfirmButton();
        return redirect()->route('backoffice.role.show',$role);
    }
}
