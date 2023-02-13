<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::find($id);
       return view('admin.posts.edit', compact('post'));
    }
}
