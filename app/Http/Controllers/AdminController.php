<?php

namespace App\Http\Controllers;

use App\admin;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }

    public function adminlogin(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checklogin = DB::table('admins')->where(['email'=>$email , 'password'=>$password])->get();
      
        if(count($checklogin) >0)
        {
            echo "Login successFull";
            session()->put('admindata', $checklogin);
            return redirect('admin/index');

        }
        else
        {
            echo "Login faield , username or passsword dose not match";
        }
    }
    public function logout()
    {

        session()->flush();
        return redirect('admin/home');
        echo "logout";

    }
}
