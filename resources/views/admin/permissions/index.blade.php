@extends('layouts.admin')
@section('content')
<livewire:admin.permissions.index>
@endsection
@section('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#permissionsModal').modal('hide');
        $('#updatePermissionsModal').modal('hide');
        $('#deletePermissionsModal').modal('hide');
    });
    </script>
@endsection

