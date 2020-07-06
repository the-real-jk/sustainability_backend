<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function checkUserCredentials(Request $request, $username, $password)
    {
        $userExists = User::where('username', $username)->first();
        $expectedPassword = User::select('password')->where('username', $username)->get();


        if ($userExists && $expectedPassword == $password) {
            return $result = "true";
        } else {
            return $result = "false";
        };
    }
}
