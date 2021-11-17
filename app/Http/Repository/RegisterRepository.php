<?php

namespace App\Http\Repository;

use App\Models\User;
use App\Mail\VerifyEmail;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Mail\RegisteredMessage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterRepository
{
    public function store($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        //send email
        VerifyUser::create([
            'token' => Str::random(60),
            'user_id' => $user->id
        ]);

        Mail::to($user->email)->send(new VerifyEmail($user));
    }

    public function emailVerify($token)
    {
        $verifiedUser = VerifyUser::where('token', $token)->first();
        if (isset($verifiedUser)) {
            $user = $verifiedUser->user;
            if (!$user->email_verified_at) {
                $user->email_verified_at = Carbon::now();
                $user->save();

                Mail::to($user->email)->send(new RegisteredMessage($user));
            }
        }
        return $verifiedUser;
    }
}
