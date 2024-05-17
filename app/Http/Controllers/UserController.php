<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showRegisterForm(){
        return "Register";
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'license_number' => 'required|string|max:15'
        ]);

        User::create($request->all());

        return redirect('/login');
    }
}
