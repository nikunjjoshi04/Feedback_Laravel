<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use DB;

class loginController extends Controller
{
    public function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checklogin = DB::table('students')->where(['email'=>$email , 'password'=>$password])->get();
      
        if(count($checklogin) >0)
        {
            echo "Login successFull";
            session()->put('userdata', $checklogin);
            return redirect('/index');

        }
        else
        {
            echo "Login faield , username or passsword dose not match";
        }
    }
    public function logout()
    {

        session()->flush();
        return redirect('/index');
        //echo "logout";

    }
}
