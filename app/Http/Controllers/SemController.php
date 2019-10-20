<?php

namespace App\Http\Controllers;

use App\sem;
// use App\clas;
use Illuminate\Http\Request;
use DB;
class SemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $classdata=DB::table('clas')
                    ->get();

        return view('admin/sem/sem',compact('classdata'));

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
       $class_id=$request->input('class_id');
       $sem=$request->input('sem');   
           
       $cla = new sem;
       $cla->cid=$class_id;
       $cla->sem=$sem;
       $cla->save();
       
       return redirect()->route('sem.index')->with('sucess','sem inserted');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sem  $sem
     * @return \Illuminate\Http\Response
     */
    public function show(sem $sem)
    {
        $sem = sem::all();
        //dd($clas);
        return view('admin/sem/showsem', compact('sem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sem  $sem
     * @return \Illuminate\Http\Response
     */
    public function edit(sem $sem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sem  $sem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sem $sem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sem  $sem
     * @return \Illuminate\Http\Response
     */
    public function destroy(sem $sem)
    {
        //
    }
}
