@extends('layout')


@section('title')
    La liste des Artistes
@endsection

@section('content')

    @extends('inc/templates/liste')

@section('card-title')
    La liste des Artistes
@endsection

@section('btn-title')
    Artiste
@endsection

@section('route')
    {{ route('artistes.create') }}
@endsection

@section('links')
    {{ $tickets->links() }}
@endsection

@section('foreach')
    @foreach ($artistes as $artiste)
        @section('routes')
            {{ route('artistes.show', ['artiste' => $artiste->id]) }}
        @endsection
        <tr>
            <td>{{ $artiste->id }}</td>
            <td>{{ $artistes->NomArtiste }}</td>
            <td><a class="badge bg-warning p-2" href="@yield('routes')">Details</a></td>
        </tr>
    @endforeach
@endsection

@endsection
