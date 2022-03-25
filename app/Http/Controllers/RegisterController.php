<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|unique:users|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
            'tahun' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'nomor_telepon' => 'required',
            'akun_ig' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        // dd($validatedData);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login!');
    }
}
