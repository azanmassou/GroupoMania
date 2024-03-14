@extends('layout')

@extends('includes.navbar')

@section('title')
    Contactez - Nous
@endsection

@section('content')
    <div class="container my-4">
        <h3>Nous Joindre</h3>
        <form action="/contact" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Psuedo</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}" placeholder="Eg : John">
                <div id="name" class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email')}}" placeholder="Eg : John@gmail.com">
                <div id="email" class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            </div>
            <div class="form-group">
                <label for="message">Votre Message</label>
                <textarea name="message" id="message" cols="20" rows="5" class="form-control @error('message') is-invalid @enderror" value="{{ old('message')}}" placeholder="Mettez Votre Message ici"></textarea>
                <div id="message" class="invalid-feedback">
                    {{ $errors->first('message') }}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
@endsection
