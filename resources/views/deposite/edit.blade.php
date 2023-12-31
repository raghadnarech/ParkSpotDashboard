@extends('layouts.app', ['title' => __('Parking Deposit')])

@section('content')
   @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Deposit",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Deposit'
],['text'=>'Edit Detail'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Deposit') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('deposite.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('deposite.update', $deposite) }}" autocomplete="off" enctype="multipart/form-data">

                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('Parking Deposit Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('cost') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-cost">{{ __('Cost') }}</label>
                                        <input type="number" name="cost" id="input-cost" class="form-control form-control-alternative{{ $errors->has('cost') ? ' is-invalid' : '' }}" placeholder="{{ __('Cost') }}" value="{{ old('cost',$deposite->cost) }}"  autofocus required>

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
                                        <input type="date" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" placeholder="{{ __('Date') }}" value="{{ old('date',$deposite->date) }}" autofocus required>

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
                                    <div class="form-group{{ $errors->has('walletuser_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-walletuser_id">{{ __('Walletuser_id') }}</label>
                                        <input type="number" name="walletuser_id" id="input-walletuser_id" class="form-control form-control-alternative{{ $errors->has('walletuser_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Walletuser_id') }}" value="{{ old('walletuser_id',$deposite->walletuser_id) }}"  autofocus required>

                                        @if ($errors->has('walletuser_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('walletuser_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('walletadmin_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-walletadmin_id">{{ __('Walletadmin_id') }}</label>
                                        <input type="number" name="walletadmin_id" id="input-walletadmin_id" class="form-control form-control-alternative{{ $errors->has('walletadmin_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Walletadmin_id') }}" value="{{ old('walletadmin_id',$deposite->walletadmin_id) }}" autofocus required>

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
