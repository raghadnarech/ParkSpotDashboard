@extends('layouts.app', ['title' => __('Parking Book')])

@section('content')
   @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Book_History",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Book_History'
],['text'=>'Edit Detail'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Book') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('book_history.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('book_history.update', $book_history) }}" autocomplete="off" enctype="multipart/form-data">

                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('Parking book Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-country">{{ __('Country') }}</label>
                                        <input type="text" name="country" id="input-country" class="form-control form-control-alternative{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="{{ __('Country') }}" value="{{ old('country',$book_history->country) }}"  autofocus required>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('num_car') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-num_car">{{ __('Number car') }}</label>
                                        <input type="number" name="num_car" id="input-num_car" class="form-control form-control-alternative{{ $errors->has('num_car') ? ' is-invalid' : '' }}" placeholder="{{ __('Number car') }}" value="{{ old('num_car',$book_history->num_car) }}" autofocus required>

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
                                    <div class="form-group{{ $errors->has('slot_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-slot_id">{{ __('Slot_id') }}</label>
                                        <input type="number" name="slot_id" id="input-slot_id" class="form-control form-control-alternative{{ $errors->has('slot_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Slot_id') }}" value="{{ old('slot_id',$book_history->slot_id) }}" autofocus required >

                                        @if ($errors->has('slot_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('slot_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('vip') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-vip">{{ __('Vip') }}</label>
                                        <input type="number" name="vip" id="input-vip" class="form-control form-control-alternative{{ $errors->has('vip') ? ' is-invalid' : '' }}" placeholder="{{ __('Vip') }}" value="{{ old('vip',$book_history->vip) }}" autofocus required >

                                        @if ($errors->has('vip'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('vip') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-hours">{{ __('Hours') }}</label>
                                        <input type="number" name="hours" id="input-hours" class="form-control form-control-alternative{{ $errors->has('hours') ? ' is-invalid' : '' }}" placeholder="{{ __('Hours') }}" value="{{ old('hours',$book_history->hours) }}" autofocus required >

                                        @if ($errors->has('hours'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('hours') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('startTime_book') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-startTime_book">{{ __('StartTime_book') }}</label>
                                        <input type="Time" name="startTime_book" id="input-startTime_book" class="form-control form-control-alternative{{ $errors->has('startTime_book') ? ' is-invalid' : '' }}" placeholder="{{ __('StartTime_book') }}" value="{{ old('startTime_book',$book_history->startTime_book) }}" autofocus required >

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
                                        <input type="Time" name="endTime_book" id="input-endTime_book" class="form-control form-control-alternative{{ $errors->has('endTime_book') ? ' is-invalid' : '' }}" placeholder="{{ __('EndTime_book') }}" value="{{ old('endTime_book',$book_history->endTime_book) }}" autofocus required >

                                        @if ($errors->has('endTime_book'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('endTime_book') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('violation') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-violation">{{ __('Violation') }}</label>
                                        <input type="number" name="violation" id="input-violation" class="form-control form-control-alternative{{ $errors->has('violation') ? ' is-invalid' : '' }}" placeholder="{{ __('Violation') }}" value="{{ old('violation',$book_history->violation) }}" autofocus required >

                                        @if ($errors->has('violation'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('violation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('total_cost') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-total_cost">{{ __('Total_cost') }}</label>
                                        <input type="number" name="total_cost" id="input-total_cost" class="form-control form-control-alternative{{ $errors->has('total_cost') ? ' is-invalid' : '' }}" placeholder="{{ __('Total_cost') }}" value="{{ old('total_cost',$book_history->total_cost) }}" autofocus required >

                                        @if ($errors->has('total_cost'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('total_cost') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('previous') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-previous">{{ __('Previous') }}</label>
                                        <input type="number" name="previous" id="input-previous" class="form-control form-control-alternative{{ $errors->has('previous') ? ' is-invalid' : '' }}" placeholder="{{ __('Previous') }}" value="{{ old('previous',$book_history->previous) }}" autofocus required >

                                        @if ($errors->has('previous'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('previous') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('extends') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-extends">{{ __('Extends') }}</label>
                                        <input type="number" name="extends" id="input-extends" class="form-control form-control-alternative{{ $errors->has('extends') ? ' is-invalid' : '' }}" placeholder="{{ __('Extends') }}" value="{{ old('extends',$book_history->extends) }}" autofocus required >

                                        @if ($errors->has('extends'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('extends') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group{{ $errors->has('merge') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-merge">{{ __('Merge') }}</label>
                                        <input type="number" name="merge" id="input-merge" class="form-control form-control-alternative{{ $errors->has('merge') ? ' is-invalid' : '' }}" placeholder="{{ __('Merge') }}" value="{{ old('merge',$book_history->merge) }}" autofocus required >

                                        @if ($errors->has('merge'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('merge') }}</strong>
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
