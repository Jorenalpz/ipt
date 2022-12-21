<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Model_Has_Roles;
use Livewire\Component;



class UserView extends Component
{
    public function render()
    {
        $users = User::get();
        //$model_has_roles = Model_Has_Roles::get();
        return view('livewire.admin.user-view', compact('users'));
    }
}
