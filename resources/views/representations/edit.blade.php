@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
    Listes des Representations
@endsection

@section('content')
    <div class="container my-4">

        <h3>Listes des Representations</h3>
        <a href="{{ route('representations.create') }}" class="btn btn-primary">Ajouter une Salle</a>

        @foreach ($salles as $salle)
            <ul class="my-4">
                <li>
                    <a href="{{ route('representations.show', ['representation' => $representation->id]) }}">{{ $representations->DateRepresentation }}</a>
                </li>
            </ul>
        @endforeach

    </div>
@endsection
