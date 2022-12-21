@extends('layouts.admin')

@section('content')
    <livewire:admin.user-view>
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
