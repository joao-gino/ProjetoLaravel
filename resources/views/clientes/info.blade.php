@extends('layouts.principal')

@section('titulo', 'Informações do Cliente')

@section('conteudo')

<h3>Informações do Cliente</h3>

<p>ID: {{$cliente['id']}}</p>
<p>Nome: {{$cliente['nome']}}</p>
<br>

<a href="{{route('clientes.index')}}">Voltar</a>

@endsection