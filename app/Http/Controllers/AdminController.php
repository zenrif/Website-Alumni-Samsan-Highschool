<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('super_admin');
        return view('dashboard.admin.index', [
            'navbar' => 'Admin',
            'super_admin' => User::where('is_super_admin', 1)->get()->sortBy('name'),
            'admins' => User::where('is_admin', 1)->where('is_super_admin', 0)->get()->sortBy('name'),
            'members' => User::where('is_admin', 0)->where('is_super_admin', 0)->get()->sortBy('name'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all(), $id);
        $this->authorize('super_admin');
        User::where('id', $id)
            ->update([
                'is_admin' => $request->is_admin
            ]);

        return redirect('/dashboard/admin')->with('success', 'Berhasil memperbarui admin!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $posts = Post::where('user_id', $id)->get();
        if ($posts) {
            foreach ($posts as $post) {
                if ($post->image) {
                    File::delete('post-images/' . $post->image);
                }
                Post::destroy($post->id);
            }
        }
        User::destroy($user->id);
        return redirect('/dashboard/admin')->with('success', 'Berhasil menghapus data dan artikel member!');
    }
}
