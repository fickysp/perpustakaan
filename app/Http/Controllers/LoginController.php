<?php

namespace App\Http\Controllers;

use App\Models\User;
use Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = $request->only(['email' => $email, 'password' => $request->password]);
        $user = User::where('email', $email)->first();


        // 12345678
        // $2a$12$RNr/8gl5lM2l7.CnshQNzuULQsG86mmDMnqLLJq6MdKhn1Q6eA6AO
        if (password_verify($request->password, $user->password)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return  redirect()->back()->withErrors('Login Gagal. Mohon periksa email dan password anda.');
        }
    }
}
