<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public $name, $guard_name;
    public function createPermission(){
        $this->validate([
            'name' => ['required'],
        ]);

        Permission::create([
            'name' => $this->name
        ]);
        $this->dispatchBrowserEvent('close-modal');
        session()->flash('message','Permission Added Successfully');
        $this->resetInput();
    }

    public function editPermission(int $permission_id)
    {
        $permission = Permission::find($permission_id);
        if($permission){
            $this->permission_id = $permission->id;
            $this->name = $permission->name;

        }else{
            return redirect()->to('/admin/permissions');
        }
    }
    public function updatePermission(){
        $this->validate([
            'name' => ['required'],

        ]);
        Permission::where('id',$this->permission_id)->update([
            'name' => $this->name,

        ]);

        session()->flash('message','permission Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function deletePermission(int $permission_id)
    {
        $this->permission_id = $permission_id;
    }

    public function destroyPermission()
    {
        Permission::find($this->permission_id)->delete();
        session()->flash('message','permission Deleted Successfully');
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
        $permissions = Permission::get();
        return view('livewire.admin.permissions.index', compact('permissions'));
    }
}
