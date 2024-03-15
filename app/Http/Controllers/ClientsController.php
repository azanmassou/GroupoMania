<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;

use Illuminate\Http\Request;


class ClientsController extends Controller
{

    public function index()
    {
        $clients = Client::paginate(5);
        // $clients = Client::status();
        $entreprises = Entreprise::all();
        return view('clients.index', compact('clients', 'entreprises'));
    }
    public function create()
    {
        $client = new Client;
        // $clients = Client::status();
        $entreprises = Entreprise::all();
        return view('clients.create', compact('client', 'entreprises'));
    }
    public function store()
    {
        $datas = request()->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer',
        ]);

        // $name = request('name');
        // $email = request('email');
        // $status = request('status');
        // $client = new Client();
        // $client->name = $name;
        // $client->email = $email;
        // $client->status = $status;
        // $client->save();

        Client::create($datas);

        return redirect('/clients')->with('message', 'Le client a ete ajoute avec success');
    }
    public function show(Client $client)
    {
        // $client = Client::where('id',$client)->firstOrFail();
        // $client = Client::find($client);
        return view('clients.show', compact('client'));
    }
    public function edit(Client $client)
    {
        $entreprises = Entreprise::all();

        return view('clients.edit', compact('client', 'entreprises'));
    }
    public function update(Client $client)
    {
        $data = request()->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer',
        ]);


        $client->update($data);

        session()->flash('message','Le client a ete mise a jour avec success');
        
        return view('clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {   
        $client->delete();

        return redirect('/clients')->with('message', 'Le client a ete supprime avec success');
    }
}
