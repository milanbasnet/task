<?php 

namespace App\Http\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PasswordRepository
{
    public function update($request)
    {
       $password= User::find(auth()->user()->id)->update(['password' => Hash::make($request->password)]);
        return $password;
    }
}