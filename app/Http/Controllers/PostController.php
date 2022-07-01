<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    public function __construct()
    {
        // On encapsule l'acces à certaines pages juste quand on est connecté et que l'on a le role 'editor'
        $this->middleware(['auth', 'role:editor'])->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();// On aura trop de requete à lq fois car on va aussi recuperer les caterory
        $posts = Post::with(['category', 'user'])->latest()->get(); // En where in =en une seule fois, permet de diminuer drastiquement le nombre de requete SQL
        return view('pages.blog.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.blog.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $imageName = $request->image->store('posts');
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName
        ]);
        return redirect()->route('dashboard')->with('success', 'Votre article a été créer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('pages.blog.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        if (!Gate::allows('update-posts', $post)) {
            return redirect()->route('posts.index')->with('warning', "Vous n'etes pas autorisés à effectuer cette action");
        }
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.blog.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if (!Gate::allows('update-posts', $post)) {
            return redirect()->route('posts.index')->with('warning', "Vous n'etes pas autorisés à effectuer cette action");
        }
        $postData = [
            'title' => $request->title,
            'content' => $request->content
        ];
        if (!empty($request->image)) {
            $imageName = $request->image->store('posts');
            $postData['image'] = $imageName;
        }
        $post->update($postData);

        return redirect()->route('dashboard')->with('success', "Votre article a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (!Gate::allows('update-posts', $post)) {
            return redirect()->route('posts.index')->with('warning', "Vous n'etes pas autorisés à effectuer cette action");
        }
        $post->delete();
        return redirect()->route('dashboard')->with('success', "Votre article a été supprimer avec succés");
    }
}
