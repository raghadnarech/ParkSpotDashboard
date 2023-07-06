@extends('layouts.app', ['title' => __('Parking Deposit Super Admin')])

@section('content')
    @include('layouts.headers.header',
    array(
        'class'=>'info',
        'title'=>"Parking Deposit Super Admin",'description'=>'',
        'icon'=>'fas fa-home',
        'breadcrumb'=>array([
            'text'=>'Parking Deposit Super Admin'
],['text'=>'Add New'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Deposit Super Admin') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('depositsuperadmin.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('depositsuperadmin.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Parking Deposit Super Admin Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('cost') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-cost">{{ __('Cost') }}</label>
                                        <input type="number" name="cost" id="input-cost" class="form-control form-control-alternative{{ $errors->has('cost') ? ' is-invalid' : '' }}" placeholder="{{ __('Cost') }}" value="{{ old('cost') }}"  autofocus required>

                                        @if ($errors->has('cost'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cost') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-date">{{ __('Date') }}</label>
                                        <input type="date" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" placeholder="{{ __('Date') }}" value="{{ old('date') }}"  autofocus required>

                                        @if ($errors->has('date'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('super_admin_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-super_admin_id">{{ __('Super_admin_id') }}</label>
                                        <input type="number" name="super_admin_id" id="input-super_admin_id" class="form-control form-control-alternative{{ $errors->has('super_admin_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Super_admin_id') }}" value="{{ old('super_admin_id') }}"  autofocus required >

                                        @if ($errors->has('super_admin_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('super_admin_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('walletadmin_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-lan">{{ __('Walletadmin_id') }}</label>
                                        <input type="number" name="walletadmin_id" id="input-walletadmin_id" class="form-control form-control-alternative{{ $errors->has('walletadmin_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Walletadmin_id') }}" value="{{ old('walletadmin_id') }}"  autofocus required >

                                        @if ($errors->has('walletadmin_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('walletadmin_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
