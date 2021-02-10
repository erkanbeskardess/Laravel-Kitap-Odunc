<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist= User::all();
        return view('admin.users', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $data= User::find($id);
        return view('admin.user_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user,$id)
    {
        $data= User::find($id);
        $data->name =$request->input('name');
        $data->email =$request->input('email');
        $data->phone =$request->input('phone');
        $data->address =$request->input('address');
            $data->save();
            return redirect('admin/user')->with('success','Kullanıcı Güncellendi.');

    }
    public function user_roles(User $user,$id)
    {
        $data= User::find($id);
        $datalist = Role::all();
        return view('admin.user_roles_edit',['data'=>$data,'datalist'=>$datalist]);

    }
    public function user_roles_store(Request $request, User $user,$id)
    {
        $user= User::find($id);
        $role_id=$request->input('role_id');
        $user->roles()->attach($role_id);
        return redirect()->back()->with('success','Rolü eklendi');

    }
    public function user_roles_delete(Request $request, User $user,$user_id,$role_id)
    {
        $user= User::find($user_id);
        $user->roles()->detach($role_id);
        return redirect()->back()->with('success','Rolü silindi');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
