<?php

namespace App\Http\Controllers;

use App\Models\Spectacle;
use Illuminate\Http\Request;

class SpectaclesController extends Controller
{
    //

    public function index()
    {
        $spectacles = Spectacle::paginate(5);
        // $salles = Salle::where('id',2)->get();
        // $representation = Salle::find(2)->representation;
        // $clients = Client::status();
        // $entreprises = Entreprise::all();
        return view('spectacles.index', compact('spectacles',));
    }
    // public function create()
    // {
    //     $salle = new Salle;

    //     // $clients = Client::status();

    //     $representations = Representation::all();

    //     return view('salles.create', compact('salle', 'representations'));
    // }
    // public function store()
    // {
    //     $datas = request()->validate([
    //         'TypeSalle' => 'required|min:1|max:30',
    //         'Capacite' => 'required|integer',
    //         // 'status' => 'required|integer',
    //         // 'entreprise_id' => 'required|integer',
    //     ]);

    //     // $name = request('name');
    //     // $email = request('email');
    //     // $status = request('status');
    //     // $client = new Client();
    //     // $client->name = $name;
    //     // $client->email = $email;
    //     // $client->status = $status;
    //     // $client->save();

    //     Salle::create($datas);

    //     return redirect('/salles')->with('message', 'La Salle a ete ajoute avec succes');
    // }
    public function show(Spectacle $spectacle)
    {
        // $client = Client::where('id',$client)->firstOrFail();

        $artiste = Spectacle::find($spectacle->id)->artiste;
        
        // dd($artistes);

        // $client = Client::find($client);

        return view('spectacles.show', compact('spectacle','artiste'));
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
