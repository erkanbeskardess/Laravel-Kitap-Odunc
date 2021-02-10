<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Basket::where('user_id',Auth::id())->get();
        return view('home.mybooks',['datalist' => $datalist]);
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
    public function store(Request $request,$id)
    {
        $data =Basket::find($id);
        $check = DB::table('baskets')->count();
        if($check<=2) {

            $data = new Basket();

            $data->books_id = $id;
            $data->user_id = Auth::id();
            $data->save();
            return redirect()->back()->with('success', 'Kitabınız Başarıyla sepetinize eklendi.');
        }
        else
        {
            return redirect()->back()->with('Error', 'Sepetinize en fazla 3 adet kitap ekleyebilirsiniz.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket,$id)
    {
        $data=Basket::find($id);
        $data->delete();
        return redirect()->back()->with('success','Kitap sepetinizden Çıkarılmıştır.');
    }
}
