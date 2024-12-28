<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function CreateRandomUser()
    {
        $user = User::create([
            'name' => "mohamed",
            'email' => "mohagrmed@gmail.com",
            'password' => "fffefefef"
        ]);

        return $user;
    }

    function register(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return $user;
    }

    function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!$user){
            return response()->json(['error' => "user not found"]);
        }
        if(!Hash::check($request->password, $user->password)){
            return response()->json(['error' => "password is wrong"]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['token' => $token]);
    }
}
