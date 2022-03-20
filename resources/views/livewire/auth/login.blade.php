<div>
    @if (!empty($alert))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> {{ $alert['alert'] }}!</h5>
            {{ $alert['msg'] }}
        </div>
    @endif
    <form wire:submit.prevent="actionLogin">
        <div class="input-group mb-3">
            <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror"
                placeholder="Username">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            <div class="invalid-feedback">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            <div class="invalid-feedback">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-info">
                    <input type="checkbox" wire:model="rememberMe" id="remember">
                    <label for="remember">
                        {{ __('ingat saya') }}
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-info btn-block">{{ __('Masuk') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>
