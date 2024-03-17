@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
    Creer une nouvelle Representation
@endsection

@section('content')
    <div class="container my-4">
        <h3> Creer une nouvelle Representation</h3>
        <form action="{{ route('representations.store') }}" method="post">
            @include('includes.forms.representation_ins')
            {{-- <button type="submit" class="btn btn-primary">Ajouter la Representation</button> --}}
            {{-- <button type="reset" class="btn btn-danger">Annuler</button> --}}
            <button type="submit" class="btn btn-primary">Ajouter la Representation</button>
        </form>
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajouter la Representation
        </button> --}}
    </div>
    @extends('includes.Templates.modal')
@endsection
