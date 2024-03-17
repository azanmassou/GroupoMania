@extends('layout')


@section('title')
    La liste des Salles
@endsection

@section('content')

    @extends('inc/templates/liste')

@section('card-title')
    La liste des Salles
@endsection

@section('btn-title')
Salles
@endsection

@section('route')
    {{ route('salles.create') }}
@endsection

@section('links')
    {{ $salles->links() }}
@endsection

@section('foreach')
    @foreach ($salles as $salle)
        @section('routes')
            {{ route('salles.show', ['salle' => $salle->id]) }}
        @endsection
        <tr>
            <td>{{ $salle->id }}</td>
            <td>{{ $salle->TypeSalle }}</td>
            <td><a class="badge bg-warning p-2" href="@yield('routes')">Details</a></td>
        </tr>
    @endforeach
@endsection

@endsection
