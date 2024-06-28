<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.register');
    }

    public $name = '';
    public $email = '';
    public $password = '';
 
    public function save()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        redirect('/login');
    }
}
