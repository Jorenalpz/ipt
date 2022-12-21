<div>
<div wire:ignore.self class="modal fade" id="rolesModal" tabindex="-1" aria-labelledby="rolesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rolesModalLabel">Set New Role</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-2">
                <label>Name</label>
                <input type="text" class="form-control" wire:model="name">
                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" wire:click="createRole()">Create</button>
            </div>
            <div wire:loading wire:target='createRoles'>
                <div style="display:flex; justify-content:center;
                align-items:center; background-color:rgb(223, 207, 207); width:100%;
                position:fixed; top: 10px; left:0px; z-index:9999; height:100%; opacity: .15;">
                    <div style="color: #00eeff" class="la-ball-spin-clockwise la-2x">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <p class="align-center mt-2">Adding roles</p>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
</div>
