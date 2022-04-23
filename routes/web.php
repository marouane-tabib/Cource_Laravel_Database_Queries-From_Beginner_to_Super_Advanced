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
    //$result = DB::statement('ALTER TABLE comments ADD FULLTEXT fulltext_index(content)');
    //$result = DB::table('comments')->whereRaw('MATCH(content) AGAINST (? IN BOOLEAN MODE)' , ['Rerum'])->get();
    //$result = DB::table('comments')->where('content' , 'like' , '%Rerum%')->get();
    $result = DB::table('comments')->whereRaw('MATCH(content) AGAINST (? IN BOOLEAN MODE)' , ['+Rerum -corporis'])->get();

    dump($result);

    
    return view('welcome');
});
