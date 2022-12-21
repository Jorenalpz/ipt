@extends('layouts.admin')
@section('content')
<livewire:records.userIndex>
@endsection
@section('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#treatmentModal').modal('hide');
        $('#updatetreatmentModal').modal('hide');
        $('#deletetreatmentModal').modal('hide');
    });
    </script>
@endsection

