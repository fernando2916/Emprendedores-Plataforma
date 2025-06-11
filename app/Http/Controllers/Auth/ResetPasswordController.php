<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('Auth.ResetPassword');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Find the user by email
        $user = \App\Models\User::where('email', $request->email)->first();

        Mail::to($user->email)->send(new ConfirmPassword($user));

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Correo enviado correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        // Redirect to login page with success message
        return redirect()->route('password.confirm', [
            'user' => $user,
        ]);

    }
}
