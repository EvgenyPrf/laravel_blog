<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
       return redirect()->route('admin.posts.index')->with(['success' => 'Post was deleted!']);
    }
}
