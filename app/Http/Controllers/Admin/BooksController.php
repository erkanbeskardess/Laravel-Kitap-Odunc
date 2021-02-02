<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Books::all();
        return view('admin.books',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();

        return view('admin.books_add',['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  new Books;
        $data->title=$request->input('title',100);
        $data->keywords=$request->input('keywords')->nullable();
        $data->description=$request->input('description',200);
        $data->detail=$request->input('detail',)->nullable();
        $data->menu_id=$request->input('menu_id')->nullable();
        $data->image=$request->input('image' )->nullable();
        $data->user_id=Auth::id();
        $data->status=$request->input('status')->nullable()->default('False');
        $data->name=$request->input('name',50);
        $data->novelist=$request->input('novelist',50);
        $data->publisher=$request->input('publisher',50);
        $data->price=$request->input('price')->nullable();
        $data->page=$request->input('page')->nullable();
        $data->save();
        return redirect()->route('admin_books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
    }
}
