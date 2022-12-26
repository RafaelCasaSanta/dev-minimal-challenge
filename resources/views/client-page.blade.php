@extends('layouts.layout')

@section('cabecalho')
    <div class>
        <h1>Cadastro de Clientes</h1>
    </div>
@endsection()

@section('conteudo')
    <div class="tablediv">
        <div class="tabela">
            <table class="table tablereal table-sm table-light" style="width: 100%; ">
                <thead class="tabela-header">
                    <tr>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Data De Nascimento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col" style="display:flex; justify-content:center;">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td scope="row">{{ $client['NomeCompleto'] }}</td>
                            <td scope="row">{{ $client['Email'] }}</td>
                            <td scope="row">{{ $client['Cidade'] }}</td>
                            <td scope="row">{{ date('d/m/Y', strtotime($client['DataDeNascimento'])) }}</td>
                            <td scope="row">{{ $client['Sexo'] }}</td>
                            <td scope="row">
                                <div class="flex d-flex gap-2" style="justify-content: center;">


                                    <a href="/clientes/edit/{{ $client->id }}">
                                        <button type="button" class="btn edit" data-bs-toggle="modal"
                                            data-bs-target="#edit-clients">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                            </svg>
                                        </button>
                                    </a>
                                    {{-- Botão de Editar --}}
                                    {{-- <x-edit></x-edit> --}}


                                    {{-- Excluir Clientes --}}
                                    <button type="button" class="btn excluir" data-bs-toggle="modal"
                                        data-bs-target="#delete-students">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                    <div class="modal" id="delete-students">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header modal-cabeca">
                                                    <h5 class="modal-title">Apagar Cadastro de Cliente</h5>
                                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> --}}
                                                </div>
                                                <div class="modal-body">
                                                    <b style="display:flex; justify-content:center;">Deseja Realmente
                                                        remover o Cliente ?</b>
                                                    <form action="/deleteClients/{{ $client->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                </div>
                                                <div class="modal-footer botoes-acao">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn centralizar">Excluir</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Excluir Clientes --}}
                                    {{-- <x-actions-button></x-actions-button> --}}

                            </td>
                        </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <button type="button" class="btn  centralizar" data-bs-toggle="modal" data-bs-target="#myModal">Cadastrar
            Cliente</button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastro de Clientes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ url('storeClients') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" name="NomeCompleto" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input type="text" class="form-control" name="Email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Cidade</label>
                                <input type="string" name="Cidade" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Data de Nascimento</label>
                                <input placeholder="dd/mm/aaaa" type="Date" name="DataDeNascimento" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                {{-- <label class="form-label required">Sexo</label>
                                <input type="string" name="Sexo" class="form-control" required> --}}
                                <select class="form-select" name="Sexo" class="form-control"
                                    aria-label="Default select example">
                                    <option selected>Sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>

                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>

<style>

</style>
