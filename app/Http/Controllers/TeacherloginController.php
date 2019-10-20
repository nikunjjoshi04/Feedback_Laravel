<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teachers;
use DB;


class TeacherloginController extends Controller
{
    public function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checklogin = DB::table('teachers')->where(['email'=>$email , 'password'=>$password])->get();
      
        if(count($checklogin) >0)
        {
            echo "Login successFull";
            session()->put('teacherdata', $checklogin);
            return redirect('admin/teacherindex');

        }
        else
        {
            echo "Login faield , username or passsword dose not match";
        }
    }
    public function logoutm()
    {

        session()->flush();
        return redirect('admin/home');
        echo "logout";

    }
    public function feedback(Request $request)
    {
        $tot=0;
        $u=$request->Session()->get('teacherdata')->first();
        $f=$u->id;
        $feed = DB::table('feedback')->where('teacher_id',$f)->get();
        $pre=0.00;
        foreach ($feed as $fe) {
            // dd($fe->que1);
            $tot = $tot + $fe->que1 + $fe->que2 + $fe->que3 + $fe->que4 + $fe->que5 + $fe->que6 + $fe->que7 + $fe->que8 + $fe->que9 + $fe->que10 + $fe->que11 + $fe->que12;
        }
        // dd($tot);
        $pre = $tot/count($feed);
        // dd($pre);

        return view('admin/teacherindex',compact('feed','tot','pre'));
    }
}
