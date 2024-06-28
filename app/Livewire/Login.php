<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $response = '';
    public $token = '';

    function login() {
        $user = User::where('email', $this->email)->first();
        if ($user) {
            if (Hash::check($this->password, $user->password)) {
                $this->token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $this->saveTokenToLocalStorage($this->token);
            } else {
                $this->response = "Password mismatch";
            }
        } else {
            $this->response = 'User does not exist';
        }
    }

    function saveTokenToLocalStorage($token) {
        $this->dispatch('save-to-localstorage', $token);
    }
    
    public function render()
    {
        return view('livewire.login');
    }
}
