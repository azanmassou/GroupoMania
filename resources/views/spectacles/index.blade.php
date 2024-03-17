@extends('layout')


@section('title')
    La liste des Spectacles
@endsection

@section('content')

    @extends('inc/templates/liste')

@section('card-title')
    La liste des Spectacles
@endsection

@section('btn-title')
    spectacle
@endsection

@section('route')
    {{ route('spectacles.create') }}
@endsection

@section('links')
    {{ $spectacles->links() }}
@endsection

@section('foreach')
    @foreach ($spectacles as $spectacle)
        @section('routes')
            {{ route('spectacles.show', ['spectacle' => $spectacle->id]) }}
        @endsection
        <tr>
            <td>{{ $spectacle->id }}</td>
            <td>{{ $spectacle->NomSpectacle }}</td>
            <td><a class="badge bg-warning p-2" href="@yield('routes')">Details</a></td>
        </tr>
    @endforeach
@endsection

@endsection
