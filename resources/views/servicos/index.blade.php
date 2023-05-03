@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome </th>
                <th scope="col">Açoes</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($servicos as $servico )
                <tr>
                    <th>{{ $servico->id }}</th>
                    <th>{{ $servico->nome }}</th>
                    <th>aaaa</th>
                </tr>
            @empty
                <tr>
                    <th></th>
                    <th>Nenhum registro encontrado</th>
                    <th></th>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $servicos->links() }}

@stop
