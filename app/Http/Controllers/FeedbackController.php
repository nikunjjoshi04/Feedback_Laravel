<?php

namespace App\Http\Controllers;

use App\feedback;
use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class FeedbackController extends Controller
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
        $que1=$request->input('1_q1');
        $msg1=$request->input('1_msg');
        $teacherdata=DB::table('teachers')->get();
        
        $i=1;
        foreach($teacherdata as $tdata)
        {
            for($j=1;$j<=12;$j++)
            {
                if($j==1){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que1=$request->input($objq);
                }
                    
                elseif($j==2){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que2=$request->input($objq);
                }
                    
                elseif($j==3){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que3=$request->input($objq);
                }
                    
                elseif($j==4){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que4=$request->input($objq);
                }
                    
                elseif($j==5){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que5=$request->input($objq);
                }
                    
                elseif($j==6){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que6=$request->input($objq);
                }
                    
                elseif($j==7){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que7=$request->input($objq);
                }
                    
                elseif($j==8){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que8=$request->input($objq);
                }
                    
                elseif($j==9){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que9=$request->input($objq);
                }
                    
                elseif($j==10){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que10=$request->input($objq);
                }
                    
                elseif($j==11){
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que11=$request->input($objq);
                }
                    
                elseif($j==12)
                {
                    $obj=(string)$tdata->id;
                    $objq=$obj.'_q'.(string)$j;
                    $que12=$request->input($objq);

                    $objw=$obj.'_msg';
                    $msg1=$request->input($objw);

                    $obj=(string)$tdata->id;

                    $s = $request->Session()->get('userdata')->first();
                    $sid = $s->id;
                    // dd($sid);
                }

            }
            $arr=array(
                'student_id'=>$sid,
                'teacher_id'=>$obj,
                'que1'=>$que1,
                'que2'=>$que2,
                'que3'=>$que3,
                'que4'=>$que4,
                'que5'=>$que5,
                'que6'=>$que6,
                'que7'=>$que7,
                'que8'=>$que8,
                'que9'=>$que9,
                'que10'=>$que10,
                'que11'=>$que11,
                'que12'=>$que12,
                'que13'=>$msg1,
            );

            $f=DB::table('feedback')->insert($arr);
            $i=$i+1;
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedback $feedback)
    {
        //
    }

    public function teacher()
    {
        $teacherdata=DB::table('teachers')
                ->get();
        return view('feed',compact('teacherdata'));
    }
}
