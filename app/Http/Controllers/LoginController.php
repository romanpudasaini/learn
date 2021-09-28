<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->get('fname');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
    }

    public function login(Request $request)
    {
        
    }
}
