@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
    Creer un nouveau Ticket
@endsection

@section('content')
    <div class="container my-4">
        <h3>Creer un nouveau Ticket</h3>
        <form action="{{ route('tickets.store') }}" method="post">
            @include('includes.forms.ticket_ins')
            <button type="submit" class="btn btn-primary">Ajouter le Ticket</button>
        </form>
    </div>
@endsection
