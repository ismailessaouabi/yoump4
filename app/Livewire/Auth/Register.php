<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class Register extends Component
{
    public $username ;
    public $email ;
    public $password  ;
    public $password_confirmation   ;
    
    public function store(){
        $this->validate([
            'username' => 'required|string|min:3|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        try {
            // Registration logic goes here (e.g., creating the user)
            $check_user = User::where('email', $this->email)->first();
            if ($check_user) {
                return redidect()->route('login')->with('error', 'Email already exists.');
            }
            $user = User::create([
                'name' => $this->username,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);

            Auth::login($user);
            session()->flash('message', 'Registration successful! Please log in.');
            return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
        } catch (\Throwable $th) {
            \Log::error('Registration error: ' . $th->getMessage());
            return redirect()->route('login')->with('error', $th->getMessage());       
        }
    }
    public function render(){
        return view('livewire.auth.register')->layout('livewire.auth.layout');
    }
}
