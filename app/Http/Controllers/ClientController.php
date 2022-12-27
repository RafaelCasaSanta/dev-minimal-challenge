<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use LSNepomuceno\LaravelBrazilianCeps\Services\CepService;




class ClientController extends Controller
{
    public function clientPage()
    {
        $clients = Client::all();
        return view('client-page', ['clients' => $clients]);
    }



    //Função de Gravação de um novo cliente no banco de dados
    public function storeClients(Request $request)
    {
        $clients = new Client;
        $clients->NomeCompleto = $request->NomeCompleto;
        $clients->Email = $request->Email;
        $clients->Cidade = $request->Cidade;
        $clients->Endereco = $request->Endereco;
        $clients->DataDeNascimento = $request->DataDeNascimento;
        $clients->Sexo = $request->Sexo;
        $clients->save();
        return redirect()->back()->with('status', 'Cliente Inserido com sucesso!');
    }



    //Funções de Editar e Fazer o Upload do novo dado para o cliente
    public function editClients($id)
    {
        $clients = Client::find($id);
        return view('edit', ['clients' => $clients]);
    }

    function updateClients(Request $request, $id)
    {
        $request->validate([
            'NomeCompleto' => 'required',
            'Email' => 'required',
            'Cidade' => 'required',
            'Endereco' => 'required',
            'DataDeNascimento' => 'required',
            'Sexo' => 'required'
        ]);
        $clients = Client::findOrFail($id);
        $clients->NomeCompleto =  $request['NomeCompleto'];
        $clients->Email = $request['Email'];
        $clients->Cidade = $request['Cidade'];
        $clients->Cidade = $request['Endereco'];
        $clients->DataDeNascimento = $request['DataDeNascimento'];
        $clients->Sexo = $request['Sexo'];
        $clients->save();
        return redirect('/clientes');
    }

    //Função de delete do cliente!
    //Problema na seleção do usuário que será deletado, ele está sempre buscando o primeiro da lista;
    public function deleteClients($NomeCompleto)
    {
        $clients = Client::find($NomeCompleto);
        $clients->delete();
        return redirect()->back();
    }
}
