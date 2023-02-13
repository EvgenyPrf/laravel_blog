<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class DestroyController extends BaseController
{
    public function __invoke(User $user)
    {
        $user->delete();
       return redirect()->route('admin.users.index')->with(['success' => 'User was deleted!']);
    }
}
