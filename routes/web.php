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
    //--- ((( PDO ))) ---//
        // connection data base with PDO , par default connection with mysql
        $pdo = DB::connection()->getPdo();
        $users = $pdo->query('select * from users')->fetchAll();

        /* Connection database with pdo sqlite
        $pdo = DB::connection('sqlite')->getPdo();*/

    //--- ((( Query Builder ))) ---//
        // Selcet Data with DB facade
        $result = DB::select('select * from users');
        $result_id = DB::select('select * from users where id=?' , [1]);
        $result_id_multi_sector = DB::select('select * from users where id=:id' , ['id' => 1]); 
        // Insert data with DB Facade 
        $insert = DB::insert('insert into users (name , email , password) values (?,?,?)' , ['Mike' , 'ddzl@mail.fb' , 'password123']);
        // Update data with DB Facade 
        $affected = DB::update('update users set email = "nawemfail@mail.fb" where id=?' , [1]);
        // Delete data with Db Facade 
        $dalete = DB::delete('delete from users where id=?' , [4]);
    
        dump("result" , $result);
        dump("result_id" , $result_id);
        dump("result_id_multi_sector" , $result_id_multi_sector);
        dump("insert" , $insert);
        //dump("affected" , $affected);
        dump("dalete" , $dalete);
    
    return view('welcome');
});
