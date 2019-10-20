<?php

namespace App\Http\Controllers;

use App\ques;
use Illuminate\Http\Request;

class QuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ques = ques::all();
        //dd($clas);
        return view('admin/showque', compact('ques'));
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
        ques::create([
            'question'=>$request->que,
        ]);
        return redirect('admin/showque');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ques  $ques
     * @return \Illuminate\Http\Response
     */
    public function show(ques $ques)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ques  $ques
     * @return \Illuminate\Http\Response
     */
    public function edit(ques $ques)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ques  $ques
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ques $ques)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ques  $ques
     * @return \Illuminate\Http\Response
     */
    public function destroy(ques $ques)
    {
        //
    }
}
