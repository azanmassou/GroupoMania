@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
    Details sur le Spectacle
@endsection

@section('content')
    <div class="container my-4">
        <div class="d-flex flex-row">
            <h2>{{ $spectacle->NomSpectacle }}</h2>
            <form method="post" class="mx-4" action="{{ route('spectacles.show', ['spectacle' => $spectacle->id]) }}"
                style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer la Salle</button>
                <a href="{{ route('spectacles.edit',['spectacle' => $spectacle->id])}}" class="btn btn-info">Modifier la Salle</a>
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

        <h3 class="text-center">L'artiste associees a cet Spectacle</h3>
        @isset($artiste)
            {{-- @foreach ($artistes as $artiste)
                <ul>
                    <li> --}}
                        <a href="{{route('artistes.show', ['artiste' => $artiste->id])}}">{{ $artiste->NomArtiste }}</a>
                    {{-- </li>
                </ul>
            @endforeach --}}
        @endisset
    </div>
@endsection
