<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate(5);
        // $clients = Client::status();
        // $entreprises = Entreprise::all();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        $user = new User;
        // $clients = Client::status();
        // $entreprises = Entreprise::all();
        return view('users.create', compact('user'));
    }
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

    //     return redirect('/clients')->with('message', 'Le client a ete ajoute avec success');
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

    //     session()->flash('message','Le client a ete mise a jour avec success');
        
    //     return view('clients.show', compact('client'));
    // }

    // public function destroy(Client $client)
    // {   
    //     $client->delete();

    //     return redirect('/clients')->with('message', 'Le client a ete supprime avec success');
    // }

    // public function sessionDoc()
    // {
    //     // Requete = $request

    //     //     $value = $request->session()->get('key', 'default');

    //     //     $value = $request->session()->get('key', function () {
    //     //         return 'default';
    //     //     });

    //     // }

    //     // $data = $request->session()->all();

    //     //     $data = $request->session()->only(['username', 'email']);

    //     // $data = $request->session()->except(['username', 'email']);

    //     // if ($request->session()->exists('users')) {
    //     //     // ...
    //     // }

    //     // Via a request instance...
    //     // $request->session()->put('key', 'value');

    //     // $request->session()->push('user.teams', 'developers');

    //     // $value = $request->session()->pull('key', 'default');

    //     // $request->session()->flash('status', 'Task was successful!');


    //     // Forget a single key...
    //     // $request->session()->forget('name');

    //     // Forget multiple keys...
    //     // $request->session()->forget(['name', 'status']);

    //     // $request->session()->flush();

    //     // $request->session()->regenerate();

    //     // $request->session()->invalidate();


    //     //  Session = session()
    //     // Route::get('/home', function () {
    //     //     // Retrieve a piece of data from the session...
    //     //     $value = session('key');

    //     //     // Specifying a default value...
    //     //     $value = session('key', 'default');

    //     //     // Store a piece of data in the session...
    //     //     session(['key' => 'value']);
    //     // });
    //     // Via the global "session" helper...
    //     // session(['key' => 'value']);
    // }
    public function connexion()
    {
        return view('auth.connexion.index');
    }
    public function inscription()
    {
        return view('auth.inscription.index');
    }
}
