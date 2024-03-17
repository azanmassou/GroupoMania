@extends('layout')


@section('title')
    La liste des representations
@endsection

@section('content')

    @extends('inc/templates/liste')

@section('card-title')
    La liste des Representations
@endsection

@section('btn-title')
Representation
@endsection

@section('route')
    {{ route('representations.create') }}
@endsection

@section('links')
    {{ $representations->links() }}
@endsection

@section('foreach')
    @foreach ($representations as $representation)
        @section('routes')
            {{ route('representations.show', ['representation' => $representation->id]) }}
        @endsection
        <tr>
            <td>{{ $representation->id }}</td>
            <td>{{ $representation->id }}</td>
            <td><a class="badge bg-warning p-2" href="@yield('routes')">Details</a></td>
        </tr>
    @endforeach
@endsection

@endsection
