<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //login validation
    public function checkUserCredentials(Request $request)
    {
        $password = $request['passwd'];
        $username = $request['uname'];

        $userExists = User::where('username', $username)->first();
        $expectedPassword = User::select('password')->where('username', $username)->get();
        $savedPassword = $expectedPassword['0']['password'];

        if ($userExists != null && password_verify($password, $savedPassword)) {
            return $result = "true";
        } else {
            return $result = "false";
        };
    }
}
