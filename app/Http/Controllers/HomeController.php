<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=', 0)->with('children')->get();
    }

    public function index(){
        $setting=Setting::first();
        return view('home.index',['setting'=>$setting]);
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request){


        if($request->isMethod('post'))
        {
            $credentials =$request->only('email','password');
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
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function references()
    {
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function contanct()
    {
        $setting=Setting::first();
        return view('home.contanct',['setting'=>$setting]);
    }
    public function sendmessage(Request $request)
    {
        $data= new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject',);
        $data->note=$request->input('note');
        $data->message=$request->input('message');
        $data->save();

        return redirect()->route('contanct')->with('success',"Mesajınız İletilmiştir, İlginiz için teşekkür ederiz.");
    }

    public function how()
    {
        return view('home.how');
    }
}
