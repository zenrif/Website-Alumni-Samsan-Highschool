<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.post.index', [
            'navbar' => 'My Article',
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post.create', [
            'navbar' => 'Buat Artikel',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'post-images/';
            $postImg = date('YmdHis') . auth()->user()->id . "." . $image->getClientOriginalExtension();
            // $postImg = strtotime($this->now()) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImg);
            $validatedData['image'] = "$postImg";
        }
        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['slug'] = Str::slug($request->title);
        $validatedData['slug'] = SlugService::createSlug(Post::class, 'slug', $request->title);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // dd($validatedData);
        Post::create($validatedData);

        return redirect('/dashboard/myarticle')->with('success', 'Berhasil mengunggah artikel baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // dd(Post::where('slug', $post)->first());
        // $post = Post::where('slug', $slug)->first();
        return view('dashboard.post.show', [
            'navbar' => 'My Article',
            //first() mengembalikan catatan pertama yang ditemukan dalam database. Jika tidak ada model yang cocok, itu mengembalikan null.
            // firstOrFail() mengembalikan catatan pertama yang ditemukan dalam database. Jika tidak ada model yang cocok, itu melempar kesalahan1.
            'post' => Post::where('slug', $slug)->where('user_id', auth()->user()->id)->firstOrFail(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        // dd(Post::where('slug', $slug)->first());
        return view('dashboard.post.edit', [
            'navbar' => 'Edit Artikel',
            'post' => Post::where('slug', $slug)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // dd($request->all());
        $post = Post::where('slug', $slug)->firstOrFail();
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]);

        if ($image = $request->file('image')) {
            if ($request->oldImage) {
                File::delete('post-images/' . $request->oldImage);
            }
            $destinationPath = 'post-images/';
            $postImg = date('YmdHis') . auth()->user()->id . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImg);
            $validatedData['image'] = "$postImg";
        }

        $validatedData['slug'] = SlugService::createSlug(Post::class, 'slug', $request->title);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/myarticle')->with('success', 'Berhasil mengubah artikel!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        if ($post->image) {
            File::delete('post-images/' . $post->image);
        }

        Post::destroy($post->id);
        return redirect('/dashboard/myarticle')->with('success', 'Artikel berhasil dihapus!');
    }
}
