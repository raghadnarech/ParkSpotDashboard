@extends('layouts.app', ['title' => __('Parking Car')])

@section('content')
     @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Car",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Car'
],['text'=>'Add New'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Car') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('car.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('car.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Parking Car Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-country">{{ __('Country') }}</label>
                                        <input type="text" name="country" id="input-country" class="form-control form-control-alternative{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="{{ __('Country') }}" value="{{ old('country') }}"  autofocus required>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('num_car') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-type">{{ __('ID') }}</label>
                                        <input type="text" name="num_car" id="input-num_car" class="form-control form-control-alternative{{ $errors->has('num_car') ? ' is-invalid' : '' }}" placeholder="{{ __('ID') }}" value="{{ old('num_car') }}" autofocus required>

                                        @if ($errors->has('num_car'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('num_car') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-type">{{ __('Type') }}</label>
                                        <input type="text" name="type" id="input-type" class="form-control form-control-alternative{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Type') }}" value="{{ old('type') }}" autofocus required >

                                        @if ($errors->has('type'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-color">{{ __('Color') }}</label>
                                        <input type="text" name="color" id="input-color" class="form-control form-control-alternative{{ $errors->has('color') ? ' is-invalid' : '' }}" placeholder="{{ __('Color') }}" value="{{ old('color') }}" autofocus required >

                                        @if ($errors->has('color'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('color') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('user_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-user_id">{{ __('User ID') }}</label>
                                        <input type="text" name="user_id" id="input-user_id" class="form-control form-control-alternative{{ $errors->has('user_id') ? ' is-invalid' : '' }}" placeholder="{{ __('User ID') }}" value="{{ old('user_id') }}" autofocus required >

                                        @if ($errors->has('user_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('user_id') }}</strong>
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
