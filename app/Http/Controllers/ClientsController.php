<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;


class ClientsController extends Controller
{


    // private static $client = Client::all();

    public function list(){
        $clients = Client::all();
        return view('clients.index', [ 'clients' => $clients]);
    }
    public function store(){
        
        $psuedo = request('name');
        $client = new Client();
        $client->name = $psuedo;
        $client->save();
        $clients = Client::all();

        return back();
    }
}
