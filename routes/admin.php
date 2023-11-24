<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'mddileware'=>'guest'], 
function(){
    Route::get('login', [LoginController::class, 'show_login_view'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
});



