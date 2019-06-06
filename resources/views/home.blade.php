@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="/user/create" class="mb-2 mt-0 btn btn-info text-white text-uppercase" target="_blank">criar novo usuário</a>
            <div class="card">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>CPF</th>
                                <th>NASCIMENTO</th>
                                <th>TELEFONE</th>
                                <th>ENDEREÇO</th>
                                <th>DATA</th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($users as $user)
                            <tr class="text-uppercase">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->document}}</td>
                                <td>{{$user->birth}}</td>
                                <td>{{$user->phone ?? 'não informado'}}</td>
                                <td>
                                    <p>{{$user->address}}</p>
                                    <p>{{$user->city->name . ' - ' . $user->city->state->name}}</p>
                                </td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <div class="btn-group-vertical">
                                        <a href="/user/{{$user->id}}/edit" class="btn btn-sm btn-info text-white" target="_blank">editar</a>
                                        <a href="/user/{{$user->id}}/destroy" class="btn btn-sm btn-danger">excluir</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">nenhum usário cadastrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
