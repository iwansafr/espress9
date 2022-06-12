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
                    </thead>
                    <tbody>
                        @foreach ($dataList as $item)
                            <tr>
                                <td>{{ $loop->index + $dataList->firstItem() }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->guard_name }}</td>
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
