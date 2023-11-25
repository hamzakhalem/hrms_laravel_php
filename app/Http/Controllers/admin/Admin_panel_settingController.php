<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin_panel_setting;

class Admin_panel_settingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $com_code = auth()->user()->com_code;
        $data = Admin_panel_setting::select('*')->get('com_code', $com_code)->first();
        return view('admin.Admin_panel_setting.index', ['data' => $data]);
    }


 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin_panel_setting  $admin_panel_setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin_panel_setting $admin_panel_setting)
    {
        //
    }

}