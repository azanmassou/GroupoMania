<?php

namespace App\Http\Controllers;

use App\Models\Representation;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SallesController extends Controller
{
    //

    public function index()
    {
        $salles = Salle::paginate(5)->fragment('salle');
        // $salles = Salle::paginate(5)->fragment('salle');
        // $salle = DB::table('salles')->paginate(5);
        // dd($salle);
        // $salles = Salle::where('id',2)->get();
        // $representation = Salle::find(2)->representation;
        return view('salles.index', compact('salles',));
    }
    public function create()
    {
        $salle = new Salle;

        // $clients = Client::status();

        $representations = Representation::all();

        return view('salles.create', compact('salle', 'representations'));
    }
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'TypeSalle' => ['required', 'unique:salles', 'max:40'],
            'Capacite' => ['required', 'integer'],

        ]);


        // $token = csrf_token();
        //


        $data = session('name');

        dd($data);

        // Salle::create($validatedData);

        return redirect('/salles')->with('message', 'La Salle a ete ajoute avec succes');
    }
    public function show(Salle $salle)
    {
        // $client = Client::where('id',$client)->firstOrFail();

        $representations = Salle::find($salle->id)->representation;

        // dd($representations);

        // $client = Client::find($client);

        return view('salles.show', compact('salle', 'representations'));
    }
    public function edit(Salle $salle)
    {
        // $entreprises = Entreprise::all();

        return view('salles.edit', compact('salle',));
    }
    public function update(Salle $salle)
    {
        $data = request()->validate([
            'TypeSalle' => 'required|min:1|max:30',
            'Capacite' => 'required|integer',
            // 'status' => 'required|integer',
            // 'entreprise_id' => 'required|integer',
        ]);


        $salle->update($data);

        session()->flash('message', 'La Salle a ete modifie avec succes');

        return view('salles.show', compact('salle'));
    }

    public function destroy(Salle $salle)
    {
        $salle->delete();

        return redirect('/salles')->with('message', 'La Salle a ete supprime avec succes');
    }
}
