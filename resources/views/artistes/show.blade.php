@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
Details sur l'Artiste
@endsection

@section('content')
    <div class="container my-4">
        <div class="d-flex flex-row">
            <h2>{{ $artiste->NomArtiste }}</h2>
            <form method="post" class="mx-4" action="{{ route('artistes.show', ['artiste' => $artiste->id]) }}"
                style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer la Salle</button>
                <a href="{{route('artistes.edit', ['artiste' => $artiste->id])}}" class="btn btn-info">Modifier la Salle</a>
            </form>
        </div>
        {{-- <article class="my-2 mx-auto">
            <h5>Capacite de la Salle : {{ $salle->Capacite }}</h5>
            <div class="card">
                <p class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione omnis quos officia
                    quidem
                    eius,
                    reprehenderit sit repellendus molestias. Ratione culpa molestias fugiat! Possimus voluptates qui
                    repudiandae
                    sequi similique quis nihil labore nam! Quidem dolores, unde laboriosam repellat eaque optio ipsam
                    voluptas
                    praesentium expedita quasi, voluptatum, tempore iste nisi? Omnis, totam?</p>
            </div>
        </article> --}}

        <h3 class="text-center">Listes des Spectacles Associees a l'Artiste</h3>
        @isset($spectacles)
            @foreach ($spectacles as $spectacle)
                <ul>
                    <li>
                        <a href="{{route('spectacles.show', ['spectacle' => $spectacles[0]->id])}}">{{ $spectacles[0]->NomSpectacle }}</a>
                        
                    </li>
                </ul>
            @endforeach
        @endisset
    </div>
@endsection
