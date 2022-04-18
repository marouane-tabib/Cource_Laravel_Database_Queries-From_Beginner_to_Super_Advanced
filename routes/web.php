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
    //(-- Select all columns in users table --)
    // $users = DB::table('users')->get();

    // (-- Select just email column in users table --)
    // $users = DB::table('users')->pluck('email');

    // (-- Select the first value with name 'Mrs. Odie metz' --)
    // $user = DB::table('users')->where('name', 'Mrs. Odie Metz')->first();

    // (-- Select just email column in users table with name 'Mrs. Odie Metz' --)
    // $user = DB::table('users')->where('name', 'Mrs. Odie Metz')->value('email');

    // (-- Select user with id = 1 , in users table --)
    // $user = DB::table('users')->find(1);


    // i'm search how to use this queary
    // $comments= DB::table('comments')->select('content as comment_content')->get();

    // (-- Select just user_id distinct value in comments table --)
    // $comments= DB::table('comments')->select('user_id')->distinct()->get();


    // (-- For count how many column or result in this table or request --)
    // $result = DB::table('comments')->count();

    // (-- For get user_id greatst value in comments table --)
    // $result = DB::table('comments')->max('user_id');

    // (-- For claculate user_id value in comments table --)
    // $result = DB::table('comments')->sum('user_id');
    // min, avg


    // (-- For check if Exist there a result with this select query in comments table --)
    // $result = DB::table('comments')->where('content', 'content')->exists();
    // (-- For check if DoesntExist there a result with this select query in comments table --)
    $result = DB::table('comments')->where('content', 'content')->doesntExist();
    dump('result' , $result);
    return view('welcome');
});
