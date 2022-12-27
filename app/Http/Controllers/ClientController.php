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
        // return view('client-page');
    }

    // function clientList()
    // {
    //     $clients = Client::all();
    //     return view('client-page', ['clients' => $clients]);
    // }

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
        // Getting values from the blade template form
        $clients->NomeCompleto =  $request['NomeCompleto'];
        $clients->Email = $request['Email'];
        $clients->Cidade = $request['Cidade'];
        $clients->Cidade = $request['Endereco'];
        $clients->DataDeNascimento = $request['DataDeNascimento'];
        $clients->Sexo = $request['Sexo'];
        $clients->save();

        return redirect('/clientes');
    }

    public function deleteClients($id)
    {
        $clients = Client::where('id', $id)->firstorfail()->delete();

        return redirect()->back();
    }
}
