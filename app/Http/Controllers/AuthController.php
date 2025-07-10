<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('auth.index', $data);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Username atau Password salah');
        }

        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            $user = Auth::user();
            $request->session()->put([
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role
            ]);
            return $this->redirectBasedOnRole();
        }

        return redirect()->back()->with('error', 'Username atau Password salah');
    }

    protected function redirectBasedOnRole()
    {
        $redirects = [
            'admin' => '/dashboard',
            'user' => '/dashboard'
        ];

        $role = auth()->user()->role ?? null;

        return redirect($redirects[$role] ?? '/login');
    }
}
