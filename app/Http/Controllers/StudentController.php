<?php

namespace App\Http\Controllers;

use App\student;
use App\clas;
use App\sems;
use App\divs;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->Session()->get('userdata')->first();
            $sid = $s->id;
        $stud=  DB::table('students')
        ->join('clas','clas.id','=','students.class_id')
        ->join('sems','sems.id','=','students.sem_id')
        ->join('divs','divs.id','=','students.div_id')
        ->where(['students.id' => $sid ])
        ->first();
        // echo $stud;
        $classdata=DB::table('clas')
                ->get();

        return view('updateprofile', compact('stud','classdata'));
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
        $request->validate([
            'phone_number'=>'max:10',
            'password'=>'min:3|max:13',
            'cpassword' => 'required|same:password'
        ]);
        student::create([
            'e_no'=>$request->eno,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->pnum,
            'address'=>$request->add,
            'class_id'=>$request->class,
            'sem_id'=>$request->sem_id,
            'div_id'=>$request->div_id,
            'password'=>$request->password,
            'cpassword'=>$request->cpassword,
        ]);
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
         $s = $request->Session()->get('userdata')->first();
            $sid = $s->id;

        $where['id']=[$sid];
        $update = array(
                'e_no'=>$request->input('eno'),
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone_number'=>$request->input('pnum'),
                'address'=>$request->input('add'),
                'class_id'=>$request->input('class'),
                'sem_id'=>$request->input('sem_id'),
                'div_id'=>$request->input('div_id'),

        );
        // dd($update);    
        DB::table('students')->where($where)->update($update);
        return redirect('/updateprofile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }


    //-----Show in student side----------//
    public function clas()
    {
        $classdata=DB::table('clas')
                ->get();
        return view('/index',compact('classdata'));
    }
    public function findsem($id)
    {
        $semdata = DB::table("sems")->where("cid",$id)->get();
        return response()->json($semdata);
    }
    public function finddiv($id)
    {
        $divdata = DB::table("divs")->where("sid",$id)->get();
        return response()->json($divdata);
    }
    //-------------------End-----------------------//
}
