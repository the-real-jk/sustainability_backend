<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;


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

    public function addNewUser(Request $request)
    {
        $username = $request['uname'];
        $password = $request['passwd'];
        $firstname = $request['fname'];
        $lastname = $request['lname'];
        $email = $request['email'];

        $emailExists = User::where('email', $email)->first();
        $usernameExists = User::where('username', $username)->first();

        if (!$emailExists && !$usernameExists) {
            User::insert([
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'member_since' =>  Carbon::now()->timestamp,
            ]);
            return "done";
        } else {
            return "failed";
        };
    }
}
