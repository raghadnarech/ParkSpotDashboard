@extends('layouts.app', ['title' => __('Parking Slot')])

@section('content')
   @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Slot",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Slot'
],['text'=>'Edit Detail'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Slot') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('slot.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('slot.update', $slot) }}" autocomplete="off" enctype="multipart/form-data">

                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('Parking Slot Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('Slot Name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-num_slot">{{ __('Slot Name') }}</label>
                                        <input type="text" name="num_slot" id="input-num_slot" class="form-control form-control-alternative{{ $errors->has('num_slot') ? ' is-invalid' : '' }}" placeholder="{{ __('Slot Name') }}" value="{{ old('num_slot',$slot->num_slot) }}"  autofocus required>

                                        @if ($errors->has('num_slot'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('num_slot') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-status">{{ __('Status') }}</label>
                                        <input type="text" name="status" id="input-status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Status') }}" value="{{ old('status',$slot->status) }}"  autofocus required>

                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('zone_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-zone_id">{{ __('Zone ID') }}</label>
                                        <input type="number" name="zone_id" id="input-zone_id" class="form-control form-control-alternative{{ $errors->has('zone_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Zone ID') }}" value="{{ old('zone_id',$slot->zone_id) }}"  autofocus required step="1">

                                        @if ($errors->has('zone_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('zone_id') }}</strong>
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
