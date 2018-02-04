<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Post;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['posts' => Post::with('user')
                                            ->orderBy('created_at', 'desc')
                                            ->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-post');
        return view('new-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create-post');
        
        $this->validate($request,[
            'title' => 'required|unique:posts|max:30|min:8',
            'author' => 'required',
            'content' => 'required|min:125',
            'category' => 'required',
            'image' => 'required|file|image',
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path = 'post/'.str_random(10).'.jpg';
            $original = $request->file('image');
            Image::make($original)->resize(900, 300)->save('storage/'.$path);
                $post = new Post;
                $post->user_id = auth()->user()->id;
                $post->title = $request->input('title');
                $post->content = $request->input('content');
                $post->category = $request->input('category');
                $post->image = $path;
                $post->save();
        }else{
            return back()->withInput()->withErrors(); 
        }

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('post', ['post' => Post::with(['comments','user'])->findOrFail($id)]);
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
        $this->validate($request,[
            'content' => 'required|min:125',
        ]);

        $post = Post::findOrFail($id);
        $this->authorize('modify', $post);
        
        $post->content = $request->content;
        $post->save();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('modify', $post);
        Storage::delete($post->image);
        $post->delete();
        return redirect('home');
    }
}
