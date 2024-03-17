@extends('layout')


@section('title')
    La liste des tickets
@endsection

@section('content')

    @extends('inc/templates/liste')

@section('card-title')
    La liste des tickets
@endsection

@section('btn-title')
    ticket
@endsection

@section('route')
    {{ route('tickets.create') }}
@endsection

@section('links')
    {{ $tickets->links() }}
@endsection

@section('foreach')
    @foreach ($tickets as $ticket)
        @section('routes')
            {{ route('tickets.show', ['ticket' => $ticket->id]) }}
        @endsection
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->Libelle }}</td>
            <td><a class="badge bg-warning p-2" href="@yield('routes')">Details</a></td>
        </tr>
    @endforeach
@endsection

@endsection
