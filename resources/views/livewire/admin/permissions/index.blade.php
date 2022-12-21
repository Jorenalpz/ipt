<div>
  <div>
  @include('livewire.admin.permissions.create')
  @include('livewire.admin.permissions.edit')
  @include('livewire.admin.permissions.delete')
      @if (session()->has('message'))
      <h5 class="alert alert-sucess text-success">{{ session('message') }}</h5>
      @endif
  <a data-bs-toggle="modal" data-bs-target="#permissionsModal" class="btn btn-warning">Add</a>
   <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Guard Name</th>
          <th scope="col">Actions</th>

        </tr>
      </thead>
      <tbody>
          @foreach ($permissions as $per)
          <tr>
              <td scope="row">{{$per->id}}</th>
              <td>{{$per->name}}</td>
              <td>{{$per->guard_name}}</td>
              <td><a type="button" data-bs-toggle="modal" data-bs-target="#updatePermissionsModal" wire:click="editPermission({{$per->id}})">
                <i class="bi bi-pencil-square" style="color:rgb(0, 81, 255);"></i>
            </a>
            <a type="button" data-bs-toggle="modal" data-bs-target="#deletePermissionsModal" wire:click="deletePermission({{$per->id}})">
                <i class="bi bi-trash3" style="color:red;"></i>
            </a></td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
</div>
