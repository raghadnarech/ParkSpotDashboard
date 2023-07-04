@extends('layouts.app', ['title' => __('Parking Book Monthly')])

@section('content')
   @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Book Monthly",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Book Monthly'
],['text'=>'Edit Detail'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Book Monthly') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('book_monthly.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('book_monthly.update', $book) }}" autocomplete="off" enctype="multipart/form-data">

                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('Parking book Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('user_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-user_id">{{ __('User_id') }}</label>
                                        <input type="text" name="user_id" id="input-user_id" class="form-control form-control-alternative{{ $errors->has('user_id') ? ' is-invalid' : '' }}" placeholder="{{ __('User_id') }}" value="{{ old('user_id',$book->user_id) }}"  autofocus required>

                                        @if ($errors->has('user_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('user_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('slot_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-slot_id">{{ __('Slot id') }}</label>
                                        <input type="number" name="slot_id" id="input-slot_id" class="form-control form-control-alternative{{ $errors->has('slot_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Slot id') }}" value="{{ old('slot_id',$book->slot_id) }}" autofocus required>

                                        @if ($errors->has('slot_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('slot_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('vip') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-vip">{{ __('Vip') }}</label>
                                        <input type="number" name="vip" id="input-vip" class="form-control form-control-alternative{{ $errors->has('vip') ? ' is-invalid' : '' }}" placeholder="{{ __('Vip') }}" value="{{ old('vip',$book->vip) }}" autofocus required >

                                        @if ($errors->has('vip'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('vip') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('startTime_book') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-startTime_book">{{ __('StartTime_book') }}</label>
                                        <input type="Date" name="startTime_book" id="input-startTime_book" class="form-control form-control-alternative{{ $errors->has('startTime_book') ? ' is-invalid' : '' }}" placeholder="{{ __('StartTime_book') }}" value="{{ old('startTime_book',$book->startTime_book) }}" autofocus required >

                                        @if ($errors->has('startTime_book'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('startTime_book') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('endTime_book') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-endTime_book">{{ __('EndTime_book') }}</label>
                                        <input type="Date" name="endTime_book" id="input-endTime_book" class="form-control form-control-alternative{{ $errors->has('endTime_book') ? ' is-invalid' : '' }}" placeholder="{{ __('EndTime_book') }}" value="{{ old('endTime_book',$book->endTime_book) }}" autofocus required >

                                        @if ($errors->has('endTime_book'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('endTime_book') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('expired') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-violation">{{ __('Expired') }}</label>
                                        <input type="number" name="expired" id="input-expired" class="form-control form-control-alternative{{ $errors->has('expired') ? ' is-invalid' : '' }}" placeholder="{{ __('Expired') }}" value="{{ old('violation',$book->expired) }}" autofocus required >

                                        @if ($errors->has('expired'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('expired') }}</strong>
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
