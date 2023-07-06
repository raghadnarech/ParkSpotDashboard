@extends('layouts.app', ['title' => __('Parking Transaction Monthly')])

@section('content')
   @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Transaction Monthly",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Transaction Monthly'
],['text'=>'Edit Detail'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Transaction Monthly') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('transactionmonthly.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('transactionmonthly.update', $transactionmonthly) }}" autocomplete="off" enctype="multipart/form-data">

                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('Parking Transaction Monthly Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('bookmonthly_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-bookmonthly_id">{{ __('Bookmonthly_id') }}</label>
                                        <input type="number" name="bookmonthly_id" id="input-bookmonthly_id" class="form-control form-control-alternative{{ $errors->has('bookmonthly_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Bookmonthly_id') }}" value="{{ old('bookmonthly_id',$transactionmonthly->bookmonthly_id) }}"  autofocus required>

                                        @if ($errors->has('bookmonthly_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('bookmonthly_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('typepay_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-typepay_id">{{ __('Typepay_id') }}</label>
                                        <input type="number" name="typepay_id" id="input-typepay_id" class="form-control form-control-alternative{{ $errors->has('typepay_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Typepay_id') }}" value="{{ old('typepay_id',$transactionmonthly->typepay_id) }}"  autofocus required>

                                        @if ($errors->has('typepay_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('typepay_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('cost') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-cost">{{ __('Cost') }}</label>
                                        <input type="number" name="cost" id="input-cost" class="form-control form-control-alternative{{ $errors->has('cost') ? ' is-invalid' : '' }}" placeholder="{{ __('Cost') }}" value="{{ old('cost',$transactionmonthly->cost) }}" autofocus required >

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
                                        <input type="date" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" placeholder="{{ __('date') }}" value="{{ old('date',$transactionmonthly->date) }}" autofocus required >

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
                                    <div class="form-group{{ $errors->has('walletadmin_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-walletadmin_id">{{ __('walletadmin_id') }}</label>
                                        <input type="number" name="walletadmin_id" id="input-walletadmin_id" class="form-control form-control-alternative{{ $errors->has('walletadmin_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Walletadmin_id') }}" value="{{ old('walletadmin_id',$transactionmonthly->walletadmin_id) }}" autofocus required >

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
