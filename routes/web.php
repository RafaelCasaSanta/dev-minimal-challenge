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
//Rotas do Sistema
//Rota principal Clientes, onde mostra a tabela com os clientes cadastrados ou a opção de cadastrar um novo cliente
Route::get('/clientes', [ClientController::class, 'clientPage']);

//Rota de Gravação de um novo cliente no banco de dados;
Route::post('storeClients', [ClientController::class, 'storeClients']);

//Rotas de Pegar os dados para fazer a edição e assim então fazer o patch deste novo dado na tabela;
Route::get('/clientes/edit/{id}', [ClientController::class, 'editClients'])->name('editClients');
Route::patch('updateClients/{id}', [ClientController::class, 'updateClients'])->name('updateClients');

//Rota de delete do cliente mostrado na tabela;
Route::delete('deleteClients/{id}', [ClientController::class, 'deleteClients']);
