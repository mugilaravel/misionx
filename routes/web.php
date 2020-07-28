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
    return view('depan');
});

Route::get('/helloword', 'HelloController@HelloWord');
Route::get('/login', 'LoginController@login')->name('login');;
Route::get('/logout', 'LoginController@logout');
Route::get('/ticket', 'TicketController@ticket');
Route::get('/tickethelp', 'TicketController@tickethelp');
Route::post('/ticket/ticketadd', 'TicketController@ticketadd');
Route::post('/login/loginproses', 'LoginController@LoginProses');

Route::group(['middleware' => ['auth','checkRole:ADM']], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');
}
);
// /{id}