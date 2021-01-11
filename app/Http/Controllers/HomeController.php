<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function index(){
        return view('home.index');
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request){


        if($request->isMethod('post'))
        {
            $credentials =$request->only('eamil','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');

            }
            return back()->withErrors([
                'email'=>'email kayıtlı gardaş',
            ]);
        }
        else
        {
            return view('admin.login');
        }
}




    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }



    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);

        echo "Id Number :", $id;
        echo"name:", $name;
    }
    public function aboutus()
    {
        return view('home.about');
    }
}
