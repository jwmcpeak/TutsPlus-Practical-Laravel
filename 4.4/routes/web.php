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

Route::get('/', 'HomeController@index');
Route::get('/tickets', 'TicketController@index');
Route::get('/tickets/create', 'TicketController@showCreateForm');
Route::post('/tickets/create', 'TicketController@create');

Route::get('/tickets/edit/{ticketId}', 'TicketController@showEditForm');
Route::post('/tickets/edit/{ticketId}', 'TicketController@edit');

