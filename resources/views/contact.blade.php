@extends('layouts.main')

@section('title', 'Contato')

@section('content')
    @if($busca != null)
        <p>Usuário buscou por: {{$busca}}</p>
    @endif

@endsection