<?php

namespace App\Http\Controllers\admin;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    //
    public function show_login_view(){
        return view('admin.auth.login');
        // $admin['name']='admin';
        // $admin['email']='ma@mail.com';
        // $admin['username']='admin';
        // $admin['password']=bcrypt('admin');
        // $admin['active']=1;
        // $admin['date']=date('Y-m-d');
        // $admin['com_code']=1;
        // $admin['added_by']=1;
        // $admin['updated_by']=1;
        // Admin::create($admin);
    }
    public function login(LoginRequest $request){
        if(auth()->guard('admin')->attempt(['username'=> $request->username,'password'=> $request->password]))
         return view('layouts.admin');
        else 
            return redirect()->route('login')->with(['error'=>'sorry error in authentication']);
    }
}
