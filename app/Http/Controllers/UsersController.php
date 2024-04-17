<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(5);
        // User::create([
        //     'name' => 'Happy',
        //     'password' => Hash::make('0000'),
        //     'email' => 'azanmassouhappylouis@gmail.com'
        // ]);

        return view('admin.users' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //

        return view('admin.user' , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function blockUser(User $user)
{
    // $user = User::find($id);

    // if (!$user) {
    //     // Gérer le cas où l'utilisateur n'est pas trouvé
    //     return response()->json(['message' => 'Utilisateur non trouvé.'], 404);
    // }

    $user->is_blocked = true;
    $user->save();

    return view('dashbord.users');
}
}
