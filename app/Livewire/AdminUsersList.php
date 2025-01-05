<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUsersList extends Component
{
    public $users;

    public function mount() {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.admin-users-list');
    }
}
