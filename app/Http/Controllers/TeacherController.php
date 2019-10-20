<?php

namespace App\Http\Controllers;

use App\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = teacher::all();
        //dd($clas);
        return view('admin/teachershow', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

        $teacher = new teacher();
        $teacher->fname = $request->input('fname');
        $teacher->lname = $request->input('lname');
        $teacher->email = $request->input('email');
        $teacher->bdate = $request->input('bdate');
        $teacher->city = $request->input('city');
        $teacher->number = $request->input('pnum');
        $teacher->password = $request->input('password');
        $teacher->cpassword = $request->input('cpass');
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $destinationPath = public_path('/images');
            $file->move($destinationPath,$filename);
            $teacher = new teacher();
            $teacher->image =$filename;
            dd($teacher);
            // $teacher->save();
        };
        dd($teacher);
        // $teacher->save();

        // return redirect()->route('divadd.index')->with('sucess','Teacher inserted');
        return redirect('admin/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        //
    }
}
