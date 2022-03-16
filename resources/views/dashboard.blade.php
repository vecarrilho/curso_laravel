@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="col-md-10 offset-md-1dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1dashboard-events-container">
        @if(count($events) > 0)
        
        @else
            <p>Voce ainda não tem eventos, <a href="/events/create">criar novo evento</a></p>
    </div>
@endsection