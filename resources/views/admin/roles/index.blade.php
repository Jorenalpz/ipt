@extends('layouts.admin')

@section('content')
    <livewire:admin.roles.index>
@endsection



@section('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#rolesModal').modal('hide');
        $('#updateRolesModal').modal('hide');
        $('#deleteRolesModal').modal('hide');
    });
    </script>
@endsection
