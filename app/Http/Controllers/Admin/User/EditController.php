<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(User $user)
    {
       return view('admin.users.edit', compact('user'));
    }
}
