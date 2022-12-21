<div>
    <div>
    <div wire:ignore.self class="modal fade" id="updatetreatmentModal" tabindex="-1" aria-labelledby="updatetreatmentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatetreatmentModalLabel">Edit Treatment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateRecord">
                <div class="modal-body">
                    <div class="mb-2">
                        <label>brand</label>
                        <input type="text" class="form-control" wire:model="brand">
                        @error('brand') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>quantity</label>
                        <input type="string" class="form-control" wire:model="quantity">
                        @error('quantity') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label>Size</label>
                        <input type="string" class="form-control" wire:model="size">
                        @error('size') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" name="store" wire:model.defer="store">
                            <option selected>Select Store</option>
                            <option value="Alturas">Alturas</option> 
                            <option value="ICM">ICM</option> 
                            <option value="SM">SM</option> 
                            <option value="Ayala">Ayala</option>
                        </select>

                        <label for="store">Store</label>
                        @error('store')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Delivery Date</label>
                        <input type="date" class="form-control" wire:model="delivery_date">
                        @error('delivery_date') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</div>