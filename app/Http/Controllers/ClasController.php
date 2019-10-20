<?php

namespace App\Http\Controllers;

use App\clas;
use Illuminate\Http\Request;

class ClasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clas = clas::all();
        //dd($clas);
        return view('admin/classhow', compact('clas'));
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
        clas::create([
            'class'=>$request->cname,
        ]);
        return redirect('admin/classhow');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function show(clas $clas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function edit(clas $clas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clas $clas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function destroy(clas $clas)
    {
        //
    }
}
