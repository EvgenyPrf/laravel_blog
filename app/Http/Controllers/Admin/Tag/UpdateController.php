<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id)
    {
        $tag = Tag::find($id);
        $tag->update($request->validated());
       return redirect()->route('admin.tags.index');
    }
}
