<div>
    {{-- <i class="bi bi-arrow-left" wire:click="back()"></i> --}}
    <div>
        @include('livewire.records.create')
        @include('livewire.records.edit')
        @include('livewire.records.delete')
        {{-- @include('livewire.records.treatment.create')
        @include('livewire.records.treatment.edit')
        @include('livewire.records.treatment.delete') --}}
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="text-center fw-bold mt-3" style="font-family: Fantasy;">TREATMENT RECORDS</h3>
                <div class="d-flex ms-auto input-group w-50">
                    <input type="search" wire:model="search" class="form-control float-end mt-1" placeholder="Search..." />
                    <span class="input-group-text bg-light mt-1">
                        <i class="bi bi-search"></i></span>
                        <a data-bs-toggle="modal" data-bs-target="#treatmentModal" class="ms-2 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </a>
                </div>
            </div>

    <div class="card-body table-responsive">
        <table id="example1" class="table table-borderd table-sm table-hover">
            <thead class="text-center table-dark">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Illness</th>
                    <th>Symptoms</th>
                    <th>Medications</th>
                    <th>Severity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ( $records as $record)
                {{-- @if($record->user_id == auth()->id() || $this->record_id == $this->user_id) --}}
                <tr>
                    <td class="fw-light">{{$record->id}}</td>
                    <td class="fw-light">{{$record->users->name}}</td>
                    <td class="fw-light">{{$record->illness}}</td>
                    <td class="fw-light">{{$record->symptoms}}</td>
                    <td class="fw-light">{{$record->medications}}</td>
                    <td class="fw-light">{{$record->severity}}</td>
                    <td> <a type="button" data-bs-toggle="modal" data-bs-target="#updatetreatmentModal" wire:click="editTreatment({{$record->id}})">
                        <i class="bi bi-pencil-square" style="color:rgb(0, 81, 255);"></i></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#deletetreatmentModal" wire:click="deleteRecord({{$record->id}})">
                            <i class="bi bi-trash3" style="color:red;"></i></a>
                </td>
                </tr>
                {{-- @endif --}}
                @endforeach
                
                {{-- <div class="float-end mb-3">
                    <a href="patients/{{$record->id}}/generate" class="ms-3"><i class="bi bi-download"></i></a>
                    <a wire:click="generate" class="ms-3"><i class="bi bi-printer-fill"></i></a>
                </div> --}}
            </tbody>
            {{-- <div class="d-flex justify-content-between fw-light ms-3 mt-3">
                <h6> Name: {{$this->patientRecord->name}}</h6>
                <h6> Age: {{$this->patientRecord->age}}</h6>
                <h6> Gender: {{$this->patientRecord->sex}}</h6>
                <p></p>
            </div> --}}

        </table>
    </div>
    {{-- <div>
        {{$treatmentRecords->links()}}
    </div> --}}


    </div>
    </div>
</div>
