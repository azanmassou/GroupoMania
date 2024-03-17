@extends('layout')


@section('title')
    La liste des utilisateurs
@endsection

@section('content')

    @extends('inc/templates/liste')

@section('card-title')
    La liste des utilisateurs
@endsection

@section('btn-title')
    utilisateur
@endsection

@section('route')
    {{ route('users.create') }}
@endsection

@section('links')
    {{ $users->links() }}
@endsection

@section('foreach')
    @foreach ($users as $user)
        @section('routes')
            {{ route('users.show', ['user' => $user->id]) }}
        @endsection
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td><a class="badge bg-warning p-2" href="@yield('routes')">Details</a></td>
        </tr>
    @endforeach
@endsection

@endsection
