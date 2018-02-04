<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['posts' => Post::with('user')->orderBy('created_at', 'desc')->paginate(5)]);
    }

    public function category($category)
    {
        return view('home', ['posts' => Post::with('user')->orderBy('created_at', 'desc')->where('category', $category)->paginate(5)]);
    }

    public function author($id)
    {
        return view('home', ['posts' => Post::with('user')->orderBy('created_at', 'desc')->where('user_id', $id)->paginate(5)]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        return view('home',[
            'posts' => Post::with('user')
                        ->where('title', 'like', '%'.$search.'%')
                        ->orderBy('created_at', 'desc')
                        ->paginate(5)
        ]);
    }
}
