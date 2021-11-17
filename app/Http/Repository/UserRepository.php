<?php

namespace App\Http\Repository;

use App\Models\User;

class UserRepository
{
    public function update($request, $id)
    {
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        return $data->update();
    }
}
