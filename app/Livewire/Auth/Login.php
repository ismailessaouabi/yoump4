<?php

namespace App\Livewire\Auth;

use Livewire\Component;

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
            if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
                session()->flash('message', 'Login successful!');
                return redirect()->route('register');
            } else {
                session()->flash('error', 'Invalid email or password.');
                return false;
            }
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
