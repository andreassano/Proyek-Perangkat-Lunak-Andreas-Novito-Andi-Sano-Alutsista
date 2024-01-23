<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function signin()
    {
        return view('auth.signin');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function process(Request $request)
    {
        $validateData = $request
            ->validate(
                [
                    'username'           => 'required',
                    'email'           => 'required',
                    'password'          => 'required',
                ]
            );
        $result = Auth::where('username', '=', $validateData['username'])
            ->first();
        if ($result) {
            if (($request->password == $result->password)) {
                session(['username' => $request->username]);
                session(['email' => $request->email]);
                return redirect('/user/index');
            } else {
                return back()->withInput()->with('pesan', "Login Gagal");
            }
        } else {
            return back()->withInput()->with('pesan', "Login Gagal");
        }
    }

    public function logout()
    {
        session()->forget('username');
        return view('dashboard')->with('pesan', 'Logout berhasil');
    }

    public function insert(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'email' => 'required|min:3|max:50',
            'password' => 'required',
        ]);
        $data = new Auth();
        $data->username = $validateData['username'];
        $data->email = $validateData['email'];
        $data->password = $validateData['password'];
        $data->save();
        $request->session()->flash('pesan', 'Register Berhasil');
        return redirect()->route('auth.signup');
    }
}
