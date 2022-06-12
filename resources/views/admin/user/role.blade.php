@extends('admin.dashboard')
@include('livewire')
@section('content')
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addRole"><i class="fa fa-plus"></i>
        {{ __('Tambah Role') }}</button>
    <div class="modal fade" id="addRole">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add Role') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('admin.user.role-edit')
                </div>
                {{-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close') }}</button>
                    <button data-dismiss="modal" type="button" 
                        class="btn btn-danger"><i class="fa fa-trash"></i> {{ __('Sure') }}</button>
                </div> --}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @livewire('admin.user.role-list')
@endsection
