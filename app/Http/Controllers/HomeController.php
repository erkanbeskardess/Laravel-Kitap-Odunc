<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BooksController;
use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use  App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=', 0)->with('children')->get();
    }
    public function getbooks(Request $request)
    {
        $data= Books::where('title',$request->input('search'))->first();
        return redirect()->route('book',['id'=>$data->id,'price'=>$data->price]);
    }

    public function index(){
       # $setting=Setting::first();
        $slider=Books::select('id','title','description')->first(4)->get();
        $trend=Books::select('id','title','price','description')->first(2)->get();


        $datalist=[

          'slider'=>$slider,
          'trend'=>$trend,

         ];
        return view('home.index',$datalist);
    }
    public function book($id)
    {
        $data=Books::find($id);
        $datalist = Image::where('books_id',$id)->get();
        return view('home.book_detail',['datalist'=>$datalist,'data'=>$data]);
    }
    public function categorybook($id)
    {
        $datalist=Books::where('categories_id',$id)->get();
        $data=Category::find($id);
        return view('home.category_book',['data'=>$data,'datalist'=>$datalist]);
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
