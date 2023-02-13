<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['password'] = Hash::make($data['password']);
            User::firstOrCreate(['email' => $data['email']], $data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update(User $user, $data)
    {
        try {
            DB::beginTransaction();
            $user->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }
}
