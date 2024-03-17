<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    //
    public function index()
    {
        $tickets = Ticket::paginate(5);
        // $salles = Salle::where('id',2)->get();
        // $representation = Salle::find(2)->representation;

        // $clients = Client::status();
        // $entreprises = Entreprise::all();
        return view('tickets.index', compact('tickets',));
    }
    public function create()
    {
        $ticket = new Ticket;

        // $clients = Client::status();

        // $representations = Representation::all();

        return view('tickets.create', compact('ticket'));
    }
    public function store()
    {
        $datas = request()->validate([
            'Libelle' => 'required|min:1|max:30',
            // 'Capacite' => 'required|integer',
            // 'status' => 'required|integer',
            // 'entreprise_id' => 'required|integer',
        ]);

        // $name = request('name');
        // $email = request('email');
        // $status = request('status');
        // $client = new Client();
        // $client->name = $name;
        // $client->email = $email;
        // $client->status = $status;
        // $client->save();

        Ticket::create($datas);

        return redirect('/salles')->with('message', 'Le Ticket a ete ajoute avec succes');
    }
    public function show(Ticket $ticket)
    {
        // $client = Client::where('id',$client)->firstOrFail();

        // $representations = Salle::find($salle->id)->representation;

        // dd($representations);

        // $client = Client::find($client);

        return view('tickets.show', compact('ticket',));
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
