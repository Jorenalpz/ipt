<div>
<div>
  @include('livewire.admin.roles.create')
  @include('livewire.admin.roles.edit')
  @include('livewire.admin.roles.delete')
    <h1 class="text-center">Roles</h1>
    <div class="card">
      @if (session()->has('message'))
      <h5 class="alert alert-sucess text-success">{{ session('message') }}</h5>
      @endif
      <a data-bs-toggle="modal" data-bs-target="#rolesModal" class="btn btn-warning col-md-2 ms-auto"> Add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td scope="row">{{$role->id}}</th>
                <td>{{$role->name}}</td>
                <td><a type="button" data-bs-toggle="modal" data-bs-target="#updateRolesModal" wire:click="editRole({{$role->id}})">
                  <i class="bi bi-pencil-square" style="color:rgb(0, 81, 255);"></i>
              </a>
              <a type="button" data-bs-toggle="modal" data-bs-target="#deleteRolesModal" wire:click="deleteRole({{$role->id}})">
                  <i class="bi bi-trash3" style="color:red;"></i>
              </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </div>
</div>
