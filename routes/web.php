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

    // $result = DB::table('rooms')->get();
    // $result = DB::table('rooms')->where('price','<',200)->get(); // = like, etc.

    // $result = DB::table('rooms')->where([
    //     ['room_size', '2'],
    //     ['price', '<', '400'],
    // ])->get();

    //  $result = DB::table('rooms')
    //     ->where('room_size' ,'2')
    //     ->orWhere('price', '<' ,'400')
    //     ->get();

    $result = DB::table('rooms')
            ->where('price', '<' ,'400')
            ->orWhere(function($query) {
                $query->where('room_size', '>' ,'1')
                      ->where('room_size', '<' ,'4');
            })
            ->get();

    dump($result);

    
    return view('welcome');
});
