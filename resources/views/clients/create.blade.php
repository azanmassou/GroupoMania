@extends('layout')

@extends('includes.navbar')

@section('title')
    Create Client
@endsection

@section('content')
    <div class="container my-4">
        <h3>Nouveau Client</h3>
        <form action="/clients" method="post">
           @include('includes.form')
            <button type="submit" class="btn btn-primary">Ajouter le Client</button>
        </form>
    </div>
@endsection
