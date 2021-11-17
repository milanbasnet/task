<?php 

namespace App\Http\Repository;

use Illuminate\Support\Facades\Auth;

class LogoutRepository
{
    public function logout()
    {
        Auth::logout();
    }
}