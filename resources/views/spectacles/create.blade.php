@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
    Creer une nouvelle Salle
@endsection

@section('content')
    <div class="container my-4">
        <h3>Creer une nouvelle Salle</h3>
        <form action="{{ route('salles.store') }}" method="post">
            @include('includes.forms.salle_ins')
            <button type="submit" class="btn btn-primary">Ajouter la Salle</button>
        </form>
    </div>
@endsection
