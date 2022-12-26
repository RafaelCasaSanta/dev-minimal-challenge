<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;


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

Route::get('/clientes', [ClientController::class, 'clientPage']);
Route::post('storeClients', [ClientController::class, 'storeClients']);
Route::get('/clientes/edit/{id}', [ClientController::class, 'editClients'])->name('editClients');
Route::patch('updateClients/{id}', [ClientController::class, 'updateClients'])->name('updateClients');
Route::delete('deleteClients/{id}', [ClientController::class, 'deleteClients']);
