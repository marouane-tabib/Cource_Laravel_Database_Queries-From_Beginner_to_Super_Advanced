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

    // $result = DB::table('users')
    //             ->orderBy('name', 'desc')
    //             ->get();

    // $result = DB::table('users')
    //             ->latest() // created_at default
    //             ->first();
                
    // $result = DB::table('users')
    //             // ->inRandomOrder()
    //             ->orderByRaw('RAND()')
    //             ->first();

    // $result = DB::table('comments')
    //             ->selectRaw('count(id) as number_of_5stars_comments, rating')
    //             ->groupBy('rating')
    //             ->having('rating', '=', 5)
    //             ->get();

    // $result = DB::table('comments')
    //             ->skip(5)
    //             ->take(5)
    //             ->get();

    $result = DB::table('comments')
                ->offset(5)
                ->limit(5)
                ->get();

    dump($result);

    return view('welcome');
});

