@extends('layout')

@extends('includes.Templates.navbar')

@section('title')
    Details sur la Representation
@endsection

@section('content')
    <div class="container my-4">
        <div class="d-flex flex-row">
            <h2>{{ $representation->DateRepresentation }}</h2>
            <form method="post" class="mx-4"
                action="{{ route('representations.show', ['representation' => $representation->id]) }}"
                style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer la Representation</button>
                <a href="/representation/{{ $representation->id }}/edit" class="btn btn-info">Modifier la Representation</a>
            </form>
        </div>
        <div class="container">
            <h3>La salle associé a la Representation</h3>
            @isset($salle)
                <h4><a href="{{ route('salles.show', ['salle' => $salle->id]) }}"> {{ $salle->TypeSalle }}</a></h4>
            @endisset
        </div>


        <div class="container">
            <h3>La liste des Artiste associé a la Representation</h3>
            @foreach ($artistes as $artiste)
                <ul>
                    <li>
                        <a href="{{ route('artistes.show', ['artiste' => $artiste->pivot->artiste_id]) }}">
                            {{ $artiste->NomArtiste }}</a>
                    </li>
                </ul>
            @endforeach
        </div>

        <div class="container">
            <h3>La liste des Spectacles associé a la Representation</h3>
            @foreach ($spectacles as $spectacle)
                <ul>
                    <li>
                        <a href="{{ route('spectacles.show', ['spectacle' => $spectacle->pivot->spectacle_id]) }}">
                            {{ $spectacle->NomSpectacle}}</a>
                    </li>
                </ul>
            @endforeach
        </div>
        <div class="container">
            <h3>La liste des Tickets associé a la Representation</h3>
            @foreach ($tickets as $ticket)
                <ul>
                    <li>
                        <a href="{{ route('tickets.show', ['ticket' => $ticket->pivot->ticket_id]) }}">
                            {{ $ticket->Libelle}}</a>
                    </li>
                </ul>
            @endforeach
        </div>

    </div>
@endsection
