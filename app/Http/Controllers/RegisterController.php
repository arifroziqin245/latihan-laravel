<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Registration",
            "active" => "register"
        ]);
    }
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => ['required', 'min:3', 'max:100', 'unique:users'],
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:200'
       ]);

    //    $validatedData['password']=bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
     
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please login');
        
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
