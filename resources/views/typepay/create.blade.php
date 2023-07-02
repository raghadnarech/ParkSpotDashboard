@extends('layouts.app', ['title' => __('Parking zone')])

@section('content')
     @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Zone",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Zone'
],['text'=>'Add New'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Zone') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('zone.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('zone.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Parking Zone Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}"  autofocus required>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-type">{{ __('Type') }}</label>
                                        <input type="text" name="type" id="input-type" class="form-control form-control-alternative{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Type') }}" value="{{ old('type') }}"  autofocus required>

                                        @if ($errors->has('type'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('lat') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-lat">{{ __('Lat') }}</label>
                                        <input type="number" name="lat" id="input-lat" class="form-control form-control-alternative{{ $errors->has('lat') ? ' is-invalid' : '' }}" placeholder="{{ __('Lat') }}" value="{{ old('lat') }}"  autofocus required step="0.0000000001">

                                        @if ($errors->has('lat'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lat') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('lan') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-lan">{{ __('Lan') }}</label>
                                        <input type="number" name="lan" id="input-lan" class="form-control form-control-alternative{{ $errors->has('lan') ? ' is-invalid' : '' }}" placeholder="{{ __('Lan') }}" value="{{ old('lan') }}"  autofocus required step="0.0000000001">

                                        @if ($errors->has('lan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lan') }}</strong>
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
