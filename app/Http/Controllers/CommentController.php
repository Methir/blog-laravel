<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'post_id' => 'required',
        ]);

        auth()->user()->comments()->create($request->only(['content', 'post_id']));

        return redirect()->route('posts.show', ['id' => $request->post_id ]);
    }
}
