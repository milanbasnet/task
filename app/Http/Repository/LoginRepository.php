<?php

namespace App\Http\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginRepository
{
    public function login($request)
    {
        $attempt = Auth::attempt($request->only('email', 'password'));
        if ($attempt) {
            if (Auth::user()->email_verified_at == null) {
                Auth::logout();
                $attempt = false;
            }
        }
        return $attempt;
    }
}
