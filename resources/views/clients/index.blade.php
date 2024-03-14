@extends('layout')

@extends('includes.navbar')

@section('title')
    Index Client
@endsection

@section('content')
    <div class="container my-4">
        <h3>Listes de nos Clients</h3>

        @foreach ($clients as $client)
            <ul>
                <li>
                    <a href="/clients/{{ $client->id }}">{{ $client->name }}</a>
                </li>
            </ul>
        @endforeach
        <a href="/clients/create" class="btn btn-primary">Ajouter un Client</a>
    </div>
@endsection
