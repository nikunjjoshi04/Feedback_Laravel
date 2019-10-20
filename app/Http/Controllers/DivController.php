<?php

namespace App\Http\Controllers;

use App\div;
use App\sem;
use DB;
use Illuminate\Http\Request;

class DivController extends Controller
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

        return view('admin/divadd',compact('classdata'));

    }
    // public function semdata(Request $request)
    // {
    //     $semdata = DB::table("sems")->where("cid",$request->class)->pluck("sem","id");
        
        

    //     return json_encode($semdata);
    // }
 
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
        $div=$request->input('div');
        
        $div_add = new div;
        $div_add->sid=$sem_id;
        $div_add->div=$div;
        $div_add->save();
    //    dd($request->input($div_add));

        // div::create([
        //     'sid'=>$request->sem,
        //     'div'=>$request->div,
        // ]);



        return redirect()->route('divadd.index')->with('sucess','Division inserted');
        // return redirect('admin/divadd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\div  $div
     * @return \Illuminate\Http\Response
     */
    public function show(div $div)
    {
        $div = div::all();
        //dd($clas);
        return view('admin/showdiv', compact('div'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\div  $div
     * @return \Illuminate\Http\Response
     */
    public function edit(div $div)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\div  $div
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, div $div)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\div  $div
     * @return \Illuminate\Http\Response
     */
    public function destroy(div $div)
    {
        //
    }
    public function findCityWithStateID($id)
    {
        $semdata = DB::table("sems")->where("cid",$id)->get();
        return response()->json($semdata);
    }
}
