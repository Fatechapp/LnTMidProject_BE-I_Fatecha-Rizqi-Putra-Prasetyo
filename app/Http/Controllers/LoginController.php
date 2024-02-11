<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request) {

        $conn = mysqli_connect('localhost', 'root', '', 'user');
        
        $credentials = $request->validate([
            'user' => 'admin',
            'password' => 'abc123._'
        ]);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard'); // Redirect ke halaman setelah login berhasil
        }
    
        return back()->withErrors(['message' => 'Invalid login credentials']); // Redirect kembali dengan pesan error jika login gagal
    
    }
}