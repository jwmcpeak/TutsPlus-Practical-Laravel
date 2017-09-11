<?php

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

use App\Message;
use App\Http\Requests\MessageFormRequest;

Route::get('/', function () {
    $model = Message::orderBy('created_at', 'desc')->get();

    return view('welcome', array('messages' => $model));
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/create', function (MessageFormRequest $request) {
    $message = new Message(array(
        'email' => $request->get('inputEmail'),
        'title' => $request->get('inputTitle'),
        'message' => $request->get('inputMessage')
    ));

    $message->save();

    return redirect('/');
});
