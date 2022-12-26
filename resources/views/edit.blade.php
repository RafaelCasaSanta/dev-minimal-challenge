@extends('layouts.layout')

@section('cabecalho')
@endsection()

@section('conteudo')
    <div class="container mt-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Editar Cliente
            </div>
            <div class="card-body card-test form-floating mb-3">
                <form name="add-blog-post-form" class="row g-3" method="post"
                    action="{{ route('updateClients', $clients->id) }}">
                    @csrf
                    @method('PATCH')


                    <div class="form-group form-floating d-flex flex"></div>
                    <div class="mb-3">
                        <label for="studentName" class="students">Nome Completo</label>
                        <input type="text" id="title" name="NomeCompleto" class="form-control floatingInputGrid"
                            value="{{ $clients->NomeCompleto }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="studentEmail">Email</label>
                        <input type="text" name="Email" class="form-control" style="height:100%"
                            value="{{ $clients->Email }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="Cidade" class="form-label required">Cidade</label>
                        <input type="text" name="Cidade" class="form-control" value="{{ $clients->Cidade }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Data de Nascimento</label>
                        <input placeholder="dd/mm/aaaa" type="Date" name="DataDeNascimento" class="form-control"
                            value="{{ $clients->DataDeNascimento }}" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="Sexo" class="form-control" aria-label="Default select example"
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
                    <button href="/clientes" type="submit" class="btn save-button  align-items-center">Confirmar</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

    <style>
        .card {
            background-color: #64748b !important;
        }

        .card-body {
            background-color: #64748b !important;
        }

        .card-header {
            background-color: #fb923c !important;
            color: #ffff !important;
        }

        .form-control {
            background-color: #dddd;
        }

        .save-button {
            background-color: #fb923c;
            color: #ffff !important;
        }
    </style>
@endsection()
