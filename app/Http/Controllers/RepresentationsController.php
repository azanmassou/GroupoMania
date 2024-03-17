<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Models\Representation;
use App\Models\Salle;
use Illuminate\Http\Request;

class RepresentationsController extends Controller
{
    //
    public function index()
    {
        $representations = Representation::paginate(5);
        // $salles = Salle::where('id',2)->get();
        // $representation = Salle::find(2)->representation;

        // $clients = Client::status();
        // $entreprises = Entreprise::all();
        return view('representations.index', compact('representations',));
    }
    public function create()
    {
        $representation = new Representation;

        $salles = Salle::all();

        $artistes = Artiste::all();

        // $clients = Client::status();

        // $representations = Representation::all();

        return view('representations.create', compact('representation','salles','artistes'));
    }
    public function store()
    {
        $validatedData = request()->validate([
            'salle_id' => 'required|integer',
            'artiste_id' => 'required|integer',
            // 'DateReprésentation' => 'nullable|date',
            // 'HdebReprésentation' => 'required|time',
            // 'HfinReprésentation' => 'required|time',
        ]);

        // dd($datas);
        // $name = request('name');
        // $email = request('email');
        // $status = request('status');
        // $client = new Client();
        // $client->name = $name;
        // $client->email = $email;
        // $client->status = $status;
        // $client->save();

        Representation::create($validatedData);

        return redirect('/representations')->with('message', 'La Representation a ete ajoute avec succes');
    }
    public function show(Representation $representation)
    {
        // $client = Client::where('id',$client)->firstOrFail();

        $salle = Representation::find($representation->id)->salle;
        $artistes = Representation::find($representation->id)->artiste;
        $spectacles = Representation::find($representation->id)->spectacle;
        $tickets = Representation::find($representation->id)->ticket;

        
        // dd($artistes[0]->NomArtiste);

        // $client = Client::find($client);

        return view('representations.show', compact('salle', 'representation', 'artistes','spectacles','tickets'));
    }
    // public function edit(Salle $salle)
    // {
    //     // $entreprises = Entreprise::all();

    //     return view('salles.edit', compact('salle',));
    // }
    // public function update(Salle $salle)
    // {
    //     $data = request()->validate([
    //         'TypeSalle' => 'required|min:1|max:30',
    //         'Capacite' => 'required|integer',
    //         // 'status' => 'required|integer',
    //         // 'entreprise_id' => 'required|integer',
    //     ]);


    //     $salle->update($data);

    //     session()->flash('message','La Salle a ete modifie avec succes');

    //     return view('salles.show', compact('salle'));
    // }

    // public function destroy(Salle $salle)
    // {   
    //     $salle->delete();

    //     return redirect('/salles')->with('message', 'La Salle a ete supprime avec succes');
    // }
}
