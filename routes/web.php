<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // DB::transaction(function () {
    //     DB::table('users')->where('id' , 32)->delete();
    //     $result = DB::table('users')->where('id',4)->update(['name' => 'none']);
    //     dump('result' , $result);
    // }, 3);


    DB::transaction(function () {
        DB::update('update users set name = 11');
     
        DB::delete('delete from users where id=32');
    });



    //DB::table('users')->insert(['name' => 'mike' , 'email' => 'mike@ff.ff' , 'password' => 'password123']);
    return view('welcome');
});
