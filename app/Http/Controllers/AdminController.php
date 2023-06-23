<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke(Request $request) {
        if (AdminController::validation($request)) {
            $username = $request->cookie('user');
            $user = User::where('username', $username)->first();
            
            if ($user) {
                $name = $user->name;
                return view('admin.dashboard', compact('name'));
            }
        }
        return redirect(route('login.page'));
    }

    public static function validation(Request $request) {
        return $request->cookie('user') != null;
    }
}
