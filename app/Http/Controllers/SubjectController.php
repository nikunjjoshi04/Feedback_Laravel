<?php

namespace App\Http\Controllers;

use App\subject;
use DB;
use Illuminate\Http\Request;

class SubjectController extends Controller
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

        return view('admin/subject',compact('classdata'));
    }

    public function findsem($id)
    {
        $semdata = DB::table("sems")->where("cid",$id)->get();
        return response()->json($semdata);
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
        $sem_id=$request->input('sem_id');
        $subject=$request->input('subject');

        $sub_add = new subject;
        $sub_add->sid=$sem_id;
        $sub_add->subject=$subject;
        $sub_add->save();



        return redirect()->route('subject.index')->with('sucess','Subject inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        $subject = subject::all();
        //dd($clas);
        return view('admin/showsubject', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        //
    }
}
