<?php

use App\User;
use Illuminate\Support\Facades\DB;
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


    // $result = DB::statement('ALTER TABLE comments ADD FULLTEXT fulltext_index(content)'); // MySQL >= 5.6
    // $result = DB::table('comments')
    //     ->whereRaw("MATCH(content) AGAINST(? IN BOOLEAN MODE)", ['inventore'])
    //     ->get();

    // $result = DB::table('comments')->whereRaw("MATCH(content)AGAINST(? IN BOOLEAN MODE)",['+reppllendus - pariatur'])->get();

    $result = DB::table('comments')
    ->where("content", 'like', '%inventore%')
    ->get();

    dump($result);

    return view('welcome');
});
