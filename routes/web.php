<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InicioTicketController;
use App\Http\Controllers\CreaTicketController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('auth.login');    
    return redirect('/ingreso');
});

Auth::routes(['login'=>false,'logout'=>false]);

Route::get('/ingreso', [LoginController::class, 'getingreso'])->name('ingreso');

Route::post('/ingresoPost', [LoginController::class, 'postingreso'])->name('ingresoPost');

Route::get('/salida', [LoginController::class, 'salida'])->name('salida');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inicio_ticket', [InicioTicketController::class, 'inicioticket'])->name('iniTick');

Route::get('/crea_ticket', [CreaTicketController::class, 'creaticket'])->name('creaTick');

Route::get('/ticket', [TicketController::class, 'ticket'])->name('ticket');

Route::get('/funcionarios/{id}/edit', 'FuncionarioController@edit');
