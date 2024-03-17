@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
    Creer une nouvelle Salle
@endsection

@section('content')
    <div class="container my-4">
        <h3>Creer une nouvelle Salle</h3>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('salles.store') }}" method="post">
            @include('includes.forms.salle_ins')
            <button type="submit" class="btn btn-primary">Ajouter la Salle</button>
        </form>
    </div>
@endsection
