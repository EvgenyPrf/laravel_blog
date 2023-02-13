<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->validated());
       return redirect()->route('admin.posts.index');
    }
}
