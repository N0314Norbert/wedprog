<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
    }
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        return redirect()->back();
    }
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->back()->with('success', 'You are now logged in.');;
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Invalid email or password.',
            ]);
        }
    }
    public function showUpdate()
    {
        return view('update');
    }
    public function update(Request $request)
    {
        $this->validator($request->all())->validate();
        $userId = request('userId');
        $user = User::findOrFail($userId);
        $user->update($request->all());

        return redirect()->back()->with('success', 'Succesful');;
    }
    public function destroy()
    {
        $userId = request('userId');
        $user = User::findOrFail($userId);
        $user->delete();

        return redirect()->back()->with('success', 'Succesful.');;
    }
    public function showDelete()
    {
        return view('delete');
    }
}
