@extends('layouts.app', ['title' => __('Parking User')])

@section('content')
@include('layouts.headers.header',
    array(
        'class'=>'info',
        'title'=>"Parking User",'description'=>'',
        'icon'=>'fas fa-home',
        'breadcrumb'=>array([
            'text'=>'Parking User'
],['text'=>'Edit Detail'])))


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking User') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('walletuser.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="" autocomplete="off" enctype="multipart/form-data">

                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('Parking user Detail') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <label class="form-control form-control-alternative" for="input-name">{{ __( $user->name ) }}</label>
                                </div>
                                <div class="col-6">
                                    <label class="form-control-label" for="input-name">{{ __('Phone') }}</label>
                                        <label class="form-control form-control-alternative" for="input-name">{{ __( $user->phone ) }}</label>
                                </div>
                            </div>

                        </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
