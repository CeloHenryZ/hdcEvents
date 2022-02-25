@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>

<col-md-10 class="offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    @else
        <p>não possui nenhum evento <a href="events/create">criar evento</a></p>
    @endif
</col-md-10>

@endsection
