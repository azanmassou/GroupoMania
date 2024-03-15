<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SallesController extends Controller
{
    //
    
    public function index()
    {
        $salles = Salle::paginate(5);
        // $salles = Salle::where('id',2)->get();
        // dd($salles);
        // $clients = Client::status();
        // $entreprises = Entreprise::all();
        return view('salles.index', compact('salles'));
    }
    // public function create()
    // {
    //     $client = new Client;
    //     // $clients = Client::status();
    //     $entreprises = Entreprise::all();
    //     return view('clients.create', compact('client', 'entreprises'));
    // }
    // public function store()
    // {
    //     $datas = request()->validate([
    //         'name' => 'required|min:5|max:20',
    //         'email' => 'required|email',
    //         'status' => 'required|integer',
    //         'entreprise_id' => 'required|integer',
    //     ]);

    //     // $name = request('name');
    //     // $email = request('email');
    //     // $status = request('status');
    //     // $client = new Client();
    //     // $client->name = $name;
    //     // $client->email = $email;
    //     // $client->status = $status;
    //     // $client->save();

    //     Client::create($datas);

    //     return redirect('/clients')->with('message', 'Ajout Effectif');
    // }
    // public function show(Client $client)
    // {
    //     // $client = Client::where('id',$client)->firstOrFail();
    //     // $client = Client::find($client);
    //     return view('clients.show', compact('client'));
    // }
    // public function edit(Client $client)
    // {
    //     $entreprises = Entreprise::all();

    //     return view('clients.edit', compact('client', 'entreprises'));
    // }
    // public function update(Client $client)
    // {
    //     $data = request()->validate([
    //         'name' => 'required|min:5|max:20',
    //         'email' => 'required|email',
    //         'status' => 'required|integer',
    //         'entreprise_id' => 'required|integer',
    //     ]);


    //     $client->update($data);

    //     session()->flash('message','Mise a jour Effective');
        
    //     return view('clients.show', compact('client'));
    // }

    // public function destroy(Client $client)
    // {   
    //     $client->delete();

    //     return redirect('/clients')->with('message', 'Suppression Effective');
    // }
    
}
