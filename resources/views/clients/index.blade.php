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
                    <a href="{{ route('clients.show', ['client' => $client->id])}}">{{ $client->name }}</a>
                </li>
            </ul>
        @endforeach
        <a href="{{ route('clients.create')}}" class="btn btn-primary">Ajouter un Client</a>
    </div>

    <div class="row">
        <div class="d-flex justify-content-center">
            {{-- {{ $clients->links() }} --}}
        </div>
    </div>
@endsection
