<?php

namespace App\Service;

use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $password = Str::random(10);
            $data['password'] = Hash::make($password);
            $user = User::firstOrCreate(['email' => $data['email']], $data);
            Mail::to($data['email'])->send(new PasswordMail($password));
            event(new Registered($user));
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
