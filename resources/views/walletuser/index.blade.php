@extends('layouts.app', ['title' => __('Parking Wallet User')])

@section('content')
  @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Wallet User",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Wallet User'
])))

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Parking Wallet User') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('walletuser.create') }}" class="btn btn-sm btn-primary">{{ __('Add Wallet User') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('#') }}</th>
                                    <th scope="col">{{ __('amount') }}</th>
                                    <th scope="col">{{ __('user_id') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($walletuser as $item)
                                    <tr>
                                <td>{{ $loop->iteration}}</td>

                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->user_id }}</td>


                                    <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                            <form action="{{ route('walletuser.destroy', $item) }}" method="post">
                                                @csrf
                                                @method('delete')


                                                <button type="button" class="dropdown-item"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>

                                            <a class="dropdown-item"
                                                href="{{ route('walletuser.edit',$item) }}">{{ __('Edit') }}</a>

                                        </div>
                                    </div>
                                </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $walletuser->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
