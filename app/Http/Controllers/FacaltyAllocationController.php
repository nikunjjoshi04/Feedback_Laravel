<?php

namespace App\Http\Controllers;

use App\facalty_allocation;
use App\teacher;
use App\clas;
use App\sem;
use App\div;
use App\subject;
use DB;
use Illuminate\Http\Request;

class FacaltyAllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $teacher=$request->input('teacher');
        $class_id=$request->input('class');
        $sem_id=$request->input('sem_id');
        $div_id=$request->input('div_id');
        $subject_id=$request->input('subject_id');

        $facalty_allocation = new facalty_allocation;
        $facalty_allocation->teacher_id=$teacher;
        $facalty_allocation->class_id=$class_id;
        $facalty_allocation->sem_id=$sem_id;
        $facalty_allocation->div_id=$div_id;
        $facalty_allocation->subject_id=$subject_id;
        $facalty_allocation->save();

        // echo($facalty_allocation);

        return redirect('admin/suballocate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\facalty_allocation  $facalty_allocation
     * @return \Illuminate\Http\Response
     */
    public function show(facalty_allocation $facalty_allocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\facalty_allocation  $facalty_allocation
     * @return \Illuminate\Http\Response
     */
    public function edit(facalty_allocation $facalty_allocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\facalty_allocation  $facalty_allocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, facalty_allocation $facalty_allocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\facalty_allocation  $facalty_allocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(facalty_allocation $facalty_allocation)
    {
        //
    }

    public function teacher ()
    {
        $teacherdata=DB::table('teachers')
                ->get();
        $classdata=DB::table('clas')
                ->get();
        

        return view('admin/suballocate',compact('teacherdata','classdata'));
    }
    public function findsem($id)
    {
        $semdata = DB::table("sems")->where("cid",$id)->get();
        return response()->json($semdata);
    }
    public function finddiv($id)
    {
        $divdata = DB::table("divs")->where("sid",$id)->get();
        // return response()->json($divdata);
        echo $divdata;
    }
    public function findsubject($id)
    {
        $subjectdata = DB::table("subjects")->where("sid",$id)->get();
        return response()->json($subjectdata);
    }
}
