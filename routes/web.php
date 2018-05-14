<?php

use App\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

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

    Collection::macro('toUpper',function(){
        return $this->map(function($value){
            return Str::upper($value);
        });
    });

    $users = User::all();
    $newUser = $users->crossJoin(['a','b'],['X','Y','Z']);

    return response()->json($newUser);
});
