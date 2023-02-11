<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        Category::find($id)->delete();
       return redirect()->route('admin.categories.index')->with(['success' => 'Category was deleted!']);
    }
}
