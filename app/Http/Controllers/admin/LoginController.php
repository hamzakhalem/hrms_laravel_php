<?php

namespace App\Http\Controllers\admin;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show_login_view(){
        // return view('admin.auth.login');
        $admin['name']='admin';
        $admin['email']='ma@mail.com';
        $admin['username']='admin';
        $admin['password']=bcrypt('admin');
        $admin['active']=1;
        $admin['date']=date('Y-m-d');
        $admin['com_code']=1;
        $admin['added_by']=1;
        $admin['updated_by']=1;
        Admin::create($admin);
    }
    // public function login(){
    //     return view('admin.auth.login');
    // }
}
