@extends('layout')

@extends('includes.navbar')

@section('title')
    Index Salles
@endsection

@section('content')
    <div class="container my-4">

        <h3>Listes de nos Salles</h3>

        @foreach ($salles as $salle)
        
            <ul>
                <li>
                    <a href="/clients/{{ $salle->id }}">{{ $salle->TypeSalle }}</a>
                </li>
            </ul>
        @endforeach
        
        <a href="/salles/create" class="btn btn-primary">Ajouter une Salle</a>
    </div>
@endsection
