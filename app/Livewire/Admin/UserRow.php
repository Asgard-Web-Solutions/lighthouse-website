<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserRow extends Component
{
    public $user;
    public $username;
    public $email;

    public function mount(User $user) {
        $this->user = $user;
        $this->username = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.admin.user-row');
    }
}
