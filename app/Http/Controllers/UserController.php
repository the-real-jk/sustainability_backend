<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function checkUserCredentials(Request $request, $username, $password)
    {
        $userExists = User::where('username', $username)->first();
        if ($userExists) {
            $userCredentials = User::select('username', 'password')->where('username', '=', $username)->get();
            if (password_verify($password, $userCredentials[0]->password)) {
                return "Validation successfull";
            }
        }
        return "Validation failed";
    }
}
