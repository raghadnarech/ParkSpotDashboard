@extends('layouts.app', ['title' => __('Parking Wallet Admin')])

@section('content')
    @include('layouts.headers.header',
    array(
        'class'=>'info',
        'title'=>"Parking Wallet Admin",'description'=>'',
        'icon'=>'fas fa-home',
        'breadcrumb'=>array([
            'text'=>'Parking Wallet Admin'
],['text'=>'Add New'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking WalletAdmin') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('walletadmin.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('walletadmin.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Parking walletadmin Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-amount">{{ __('Amount') }}</label>
                                        <input type="number" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('Amount') }}" value="{{ old('amount') }}"  autofocus required >

                                        @if ($errors->has('amount'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('admin_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-admin_id">{{ __('Admin_id') }}</label>
                                        <input type="number" name="admin_id" id="input-admin_id" class="form-control form-control-alternative{{ $errors->has('admin_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Admin_id') }}" value="{{ old('admin_id') }}"  autofocus required >

                                        @if ($errors->has('admin_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('admin_id') }}</strong>
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
