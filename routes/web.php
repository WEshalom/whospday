<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/birthdays', function (){
    $birthdays = App\Birthday::all();
    return view('birthdays', ['birthdays' => $birthdays]);
});

Route::get('submit', function (){
    return view('submit');
});

Route::post('submit',function (Request $request){

   // dd($request);

    $data = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'birthday' => 'required',
        'age' => 'required'
    ]);

   // dd($data);

    $birthday = tap(new App\Birthday($data))->save();

    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
