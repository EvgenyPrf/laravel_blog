<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $category = Category::find($id);
       return view('admin.categories.edit', compact('category'));
    }
}
