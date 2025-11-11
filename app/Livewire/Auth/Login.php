<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;


class Login extends Component
{
    public $email;
    public $password;
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        try {
            $user = User::where('email', $this->email)->first();

            if (!$user || !Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

            Auth::login($user);
            return redirect()->route('accueil')->with('success', 'Login successful!');
            
        } catch (\Throwable $th) {
            session()->flash('error', 'An error occurred during login. Please try again.');
            return false;
        }
    }
    public function render()
    {
        return view('livewire.auth.login')->layout('livewire.auth.layout');
    }
}
