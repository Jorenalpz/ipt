<div wire:ignore.self class="modal fade" id="updatePermissionsModal" tabindex="-1" aria-labelledby="updatePermissionsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePermissionsModalLabel">Edit Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>Name</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button wire:click='updatePermission()' class="btn btn-primary">Update</button>
                </div>
        </div>
    </div>
</div>


