<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke(Request $request) {
        $isUserLogined = $request->cookie('user') != null;
        if (!($isUserLogined)) {
            return view('user.login', [
                "result" => $request->cookie('user')
            ]);
        }
        // Detour to admin dashboard instead if logined
        return response(redirect(route('admin.dashboard')));
    }

    public function login(Request $request) {
        $data = $request->all();
        $result = User::login([
            "username" => $data["username"],
            "password" => $data["password"]
        ])[0];

        if ($result != null) {
            if ($result->username == $data["username"] && $result->password == $data["password"]) {
                // Give Cookie and redirect to Admin Dashboard
                return response(redirect(route('admin.dashboard')))
                    ->cookie("user", $result->username, 120);
            }
        }
        // Change this code if something wrong with the login
        return view('user.login', [
            "result" => "login failed, credential problem"
        ]);
    }

    public function logout()
    {
        return redirect(route('login.page'))->cookie('user', null, -5);
    }
}
