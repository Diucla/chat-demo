<?php

use App\Events\MessagePosted;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chat', function (){
    return view('chat');
})->middleware('auth');


//==============================
//==============================

Route::get('/api/messages', function (){
    return App\Message::with('user')->get();
})->middleware('auth');


//
Route::post('/api/messages', function (){

    /// Store the new message
    $user = Auth::user();

    $message = $user->messages()->create([
        'message' => request()->get('message')
    ]);

    // Announce that a new message has been posted
    event(new MessagePosted($message, $user));

    return ['status' => 'OK'];

})->middleware('auth');