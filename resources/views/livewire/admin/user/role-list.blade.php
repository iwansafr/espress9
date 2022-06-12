<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Data Role') }}</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" wire:model="keyword" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" wire:click="clearSearch" class="btn btn-default">
                            <i class="fas fa-sync"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if ($dataList->isNotEmpty())
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <th>{{ __('NO') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Guard') }}</th>
                        <th>{{ __('Action') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($dataList as $item)
                            <tr>
                                <td>{{ $loop->index + $dataList->firstItem() }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->guard_name }}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#delete{{ $item->id }}"><i class="fa fa-trash"></i></button>
                                    <div class="modal fade" id="delete{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{ __('Delete') }}</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{ __('Are You Sure Want to Delete this item') }}</p>
                                                    <p class="text-bold">{{ $item->name }}</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">{{ __('Close') }}</button>
                                                    <button data-dismiss="modal" type="button" wire:click="deleteData({{ $item->id }})" class="btn btn-danger"><i class="fa fa-trash"></i> {{ __('Sure') }}</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            {{ $dataList->links() }}
        </div>
    </div>
</div>
