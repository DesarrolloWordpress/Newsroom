<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$posts = Post::where('status', 2)->orderBy('id', 'desc')->paginate(9);

        return view('welcome');
    }

    /**
     * Show the specified resource in view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // $posts = Post::where('name', 'LIKE', '%' . $request->search . '%')->latest('id')->paginate();

        // return view('welcome', compact('posts'));
    }
}
