<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormPostRequest;
use App\Http\Requests\SearchPostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(SearchPostRequest $request)
    {

        $querry =  Post::query();
        $isValidSearch = false;

        // Récupérer tous les posts avec le nombre de likes
        $posts = $querry->withCount('likes');

        if ($request->has('title')) {
            $requestSearch = $request->input('title');
            $posts = $posts->where('title', 'like', '%' . $requestSearch . '%');
            $isValidSearch = true;
        }

        $posts = $posts->paginate(5);

        $user = Auth::user();


        return view('adminer.dashboard.index', compact('user', 'posts', 'isValidSearch'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

        $user = Auth::user();

        $post = new Post;

        return view('adminer.dashboard.create', compact('post', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormPostRequest $request)
    {
        //

        // dd($request->validated());

        $user_id = Auth::id();

        $creadentials = $request->validated();

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/post', $imageName);
        }

        // Redimensionner l'image à une largeur de 300 pixels et une hauteur proportionnelle
        // $resizedImage = Image::make($imagePath)->resize(300, null, function ($constraint) {
        //     $constraint->aspectRatio();
        // });

        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->image = $imageName;
        // $post->save();

        $creadentials['user_id'] = $user_id;

        $creadentials['image'] = $imageName;

        $post = Post::create($creadentials);

        return to_route('posts.show', ['post' => $post->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('adminer.dashboard.show', compact('post',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //

        return view('adminer.dashboard.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormPostRequest $request, Post $post)
    {
        //

        // dd($request->validated());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/post', $imageName);
            $post->image = $imageName;
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        
        $post->update();

        // $user = $post->user;

        // $post->save();

        // dd($post);

        return view('adminer.dashboard.show', compact('post'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function like(Post $post, Request $request)
    {

        $user = $request->user(); // Obtenez l'utilisateur actuel

        $post->like($user);


        return redirect()->route('posts.index');
    }

    public function unlike(Post $post,  Request $request)
    {
        $user = $request->user(); // Obtenez l'utilisateur actuel

        $post->unlike($user);

        return redirect()->route('posts.index');
    }

    // Méthode pour commenter un post
    public function comment(Request $request, Post $post)
    {
        // Code pour ajouter un commentaire au post
    }

    // Méthode pour partager un post
    public function share(Request $request, Post $post)
    {
        // Code pour partager le post
    }
}
