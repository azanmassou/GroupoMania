<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return view('admin.users', compact('users'));
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

        return view('admin.user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //

        $user = Auth::user();

        return view('adminer.views.profile-edite', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChangePasswordRequest $request, User $user)
    {
        //
        $credentials = $request->validated();

        if ($credentials['password'] !== $credentials['passwords']) {

            return to_route('users.edit')->withInput(['current'])->withErrors([
                'password' => 'Les mots de password sont pas identique',
                'passwords' => 'Les mots de password sont pas identique',
            ])->with('#chang-pwd');

        }

        // if ($credentials['password'] !== $user->password) {

        //     return to_route('users.edit',['user' => $user])->withInput(['current'])->withErrors([
        //         'current' => 'Please ... Enter Correct Password',
        //         // 'passwords' => 'Les mots de password sont pas identique',
        //     ])->with('return', '#chang-pwd');
        // }

        if(Hash::check($credentials['password'], $user->password)){
            return to_route('users.edit',['user' => $user])->withInput(['current'])->withErrors([
                        'current' => 'Please ... Enter Correct Password',
                        // 'passwords' => 'Les mots de password sont pas identique',
                    ])->with('return', '#chang-pwd');
        }

        // $user->update(['password' => $credentials['password']]);

        // dd($user->update(['password' => $credentials['password']]));

        // return to_route('users.edit',['user' => $user])->withInput(['current'])->withErrors([
        //     'current' => 'Le mots de password est incorrect',
        //     'passwords' => 'Les mots de password sont pas identique',
        // ]);
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
