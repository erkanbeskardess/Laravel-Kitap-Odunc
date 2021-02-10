<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\borrow;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist= borrow::all();
        return view('admin.borrow',['datalist'=>$datalist]);
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
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(borrow $borrow,$id)
    {
        $data =borrow::find($id);
        $datali= borrow::all();
        $datalist=User::all();
        return view('admin.borrow_edit',['data'=>$data,'datalist'=>$datalist,'datali'=>$datali]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, borrow $borrow,$id)
    {
        $data =borrow::find($id);
        $data->note=$request->input('note');
        $data->status=$request->input('status');
        $data->save();
        return back()->with('success','Ödünç alma talebi Güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(borrow $borrow,$id)
    {
        $data =borrow::find($id);
        $data->delete();

        return redirect()->route('admin_borrow')->with('success','Talep silindi.');
    }
}
