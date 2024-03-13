@extends('layout')

@extends('navbar')

@section('content')
    <div class="container my-4">
        <h3>Listes de nos Clients</h3>

        <ul>
            @foreach ($clients as $client)
                <li><a href=""> {{ $client->name }} </a></li>
            @endforeach
        </ul>
        {{-- <hr> --}}
        <form action="/clients" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter un Client</button>
        </form>
    </div>
@endsection
