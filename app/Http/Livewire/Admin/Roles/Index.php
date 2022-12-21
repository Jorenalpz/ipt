<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $name, $guard_name, $role_id;

    public function createRole(){
        $this->validate([
            'name' => ['required'],
        ]);

        Role::create([
            'name' => $this->name
        ]);
        $this->dispatchBrowserEvent('close-modal');
        session()->flash('message','Role Added Successfully');
        $this->resetInput();
    }

    public function editRole(int $role_id)
    {
        $role = Role::find($role_id);
        if($role){
            $this->role_id = $role->id;
            $this->name = $role->name;

        }else{
            return redirect()->to('/admin/roles');
        }
    }
    public function updateRole(){
        $this->validate([
            'name' => ['required'],

        ]);
        Role::where('id',$this->role_id)->update([
            'name' => $this->name,

        ]);

        session()->flash('message','Role Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function deleteRole(int $role_id)
    {
        $this->role_id = $role_id;
    }

    public function destroyRole()
    {
        Role::find($this->role_id)->delete();
        session()->flash('message','Role Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInput()
    {
        $this->name = '';
    }


    public function render()
    {
        $roles = Role::get();
        return view('livewire.admin.roles.index', compact('roles'));
    }
}
