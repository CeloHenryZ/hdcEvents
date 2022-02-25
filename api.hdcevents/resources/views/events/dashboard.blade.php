@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>

<col-md-10 class="offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td scope="row">{{ $loop->index +1 }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>0</td>
                        <td>
                            <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"> <ion-icon name="create-outline"></ion-icon> editar</a>
                            <form action="/events/{{ $event->id }}" method="POST"></form>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-ico name="trash-outline"></ion-ico>DELETAR</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @else
            <p>não possui nenhum evento <a href="events/create">criar evento</a></p>
        @endif
    </table>
</col-md-10>

@endsection
