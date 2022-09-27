<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); // pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            $post->image()->create([
                'url' => $url
            ]);
        }

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }

        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se creó con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all(); // pluck('name', 'id');
        $tags = Tag::all();

        //return $post->update($request->all());

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());
        // return $request;

        if ($request->file('file_image')) {
            $url = Storage::put('posts', $request->file('file_image'));

            if ($post->image) {
                //Storage::delete($posts->image->url);

                $post->image->update([
                    'url' => $url,
                ]);
            } else {
                $post->image->create([
                    'url' => $url,
                ]);
            }
        }

        if ($request->hasFile('file_download')) {
            $url = Storage::put('posts/files', $request->file('file_download'));

            if ($post->file) {
                //Storage::delete($posts->file->url);

                $post->file->update([
                    'name' => $request->file('file_download')->getClientOriginalName(),
                    'extension' => "Mega F",
                    'url' => $url,
                    'size' => $request->file('file_download')->getSize()
                ]);
                echo "<script>console.log('Debug Objects: " . $request . "' );</script>";
            } else {
                $post->file->create([
                    'name' => $request->file('file_download')->getClientOriginalName(),
                    'extension' => $request->file('file_downloaded')->getClientOriginalExtension(),
                    'url' => $url,
                    'size' => $request->file('file_download')->getSize()
                ]);
            }
        }

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('info', 'El post se elimino con éxito.');
    }
}
