<div>

    <div>
      {{-- @include('livewire.admin.roles.create')
      @include('livewire.admin.roles.edit')
      @include('livewire.admin.roles.delete') --}}
        <h1>Users</h1>
        <div class="card">
          @if (session()->has('message'))
          <h5 class="alert alert-sucess text-success">{{ session('message') }}</h5>
          @endif
          {{-- <a data-bs-toggle="modal" data-bs-target="#rolesModal" class="btn btn-primary"> Add</a> --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    {{-- @foreach ($model_has_roles as $model)
                    <td>{{$model->role_id}}</td>
                    @endforeach --}}
                    <td>
                      {{-- <a type="button" class='btn btn-success' href="{{url('admin/records/'.$user->id)}}">Show Record</a> --}}
                      <a type="button" class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#deleteUsersModal" wire:click="deleteUser({{$user->id}})">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </div>
</div>
