@extends('layouts.layout')

@section('cabecalho')
    <div>
        <h1>Atualizar Cadastro de Cliente</h1>
    </div>
@endsection()


@section('conteudo')
    <div class="container mt-4" style="max-width: 800px;">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            {{-- <div class="card-header text-center font-weight-bold">
                Editar Cliente
            </div> --}}
            <div class="card-body card-test form-floating mb-3">
                <form name="add-blog-post-form" class="row g-3" method="post"
                    action="{{ route('updateClients', $clients->id) }}">
                    @csrf
                    @method('PATCH')


                    <div class="form-group form-floating d-flex flex"></div>
                    <div class="mb-3">
                        <label for="NomeCompleto" class="labels">Nome Completo</label>
                        <input type="text" id="NomeCompleto" name="NomeCompleto" class="form-control floatingInputGrid"
                            value="{{ $clients->NomeCompleto }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="labels">Email</label>
                        <input type="text" name="Email" class="form-control"" value="{{ $clients->Email }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="Cidade" class=" labels form-label required">Cidade</label>
                        <input type="text" name="Cidade" class="form-control" value="{{ $clients->Cidade }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="Endereco" class=" labels form-label required">Endereço</label>
                        <input type="text" name="Endereco" class="form-control" value="{{ $clients->Endereco }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="labels form-label required">Data de Nascimento</label>
                        <input placeholder="dd/mm/aaaa" type="Date" name="DataDeNascimento" class="form-control"
                            value="{{ $clients->DataDeNascimento }}" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control form-select" name="Sexo" aria-label="Default select example"
                            required>
                            <option selected>{{ $clients->Sexo }}</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>

            </div>
            <div class="mb-3">
                <div class="form-group form-floating justify-content-md-center d-grid gap-2 d-md-flex">
                    <a href="/clientes" type="button" class="btn btn-danger align-items-center">Cancelar</a>
                    <button href="/clientes" type="submit" class="btn align-items-center"
                        style="background-color:#00aceb; color:#FFFF;">Confirmar</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

    <style>
        .card {
            background-color: #FFFF !important;
        }

        .card-body {
            background-color: #FFFF !important;
        }

        .card-header {
            background-color: #fb923c !important;
            color: #00aceb !important;
        }

        .form-control {
            color: #FFFF;
            background-color: #8f8fc9;
        }

        .labels {
            display: flex;
            justify-content: center;
            color: #002647;
            font-size: larger;
            font-weight: bold;
        }
        }

        .save-button {
            background-color: #00aceb !important;
            color: #ffff !important;
        }
    </style>
@endsection()
