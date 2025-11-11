<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;


class Register extends Component
{
    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    
    public function register(){
        $this->validate([
            'username' => 'required|string|min:3|max:20|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        try {
            // Registration logic goes here (e.g., creating the user)
            $user = User::where('email', $this->email)->first();
            if ($user) {
                session()->flash('error', 'Email already registered.');
                return false;
            }
            User::create([
                'username' => $this->username,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);

            session()->flash('message', 'Registration successful! Please log in.');
            return redirect()->route('login');
        } catch (\Throwable $th) {
            session()->flash('error', 'An error occurred during registration. Please try again.');
            return false;
        }
    }
    public function render(){
        return view('livewire.auth.register')->layout('livewire.auth.layout');
    }
}
