@extends('layouts.app', ['title' => __('Parking Car ')])

@section('content')
  @include('layouts.headers.header',
      array(
          'class'=>'info',
          'title'=>"Parking Car",'description'=>'',
          'icon'=>'fas fa-home',
          'breadcrumb'=>array([
            'text'=>'Parking Car'
])))

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">

                    {{-- {{ أزرار البحث }} --}}
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                          <div class="col-6 col-md-4">
                            <h3 class="mb-0">{{ __('Parking Car') }}</h3>
                          </div>

                          <div class="col-6 col-md-4">
                            <form class="form-inline" action="{{ route('car.search') }}" method="GET">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{ __('Search') }}" aria-describedby="" name="search">
                                <div class="input-group-append">
                                  <button class="btn btn-sm btn-primary" type="submit">{{ __('Search') }}</button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="col-12 col-md-4 mt-3 mt-md-0 text-md-right">
                            <button class="btn btn-sm btn-primary" id="advanced-search-toggle">{{ __('Advanced Search') }}</button>
                            <a href="{{ Url('car\create') }}" class="btn btn-sm btn-primary ml-2">{{ __('Add Car') }}</a>
                          </div>
                        </div>

                        <div class="row mt-3" id="advanced-search-form" style="display:none;">
                          <div class="col-12 col-md-8 offset-md-2">
                            <form class="card p-3" action="{{ route('car.advancesearch') }}" method="GET" >
                              <div class="form-row">
                                <div class="col-12 col-sm-4 form-group">
                                  <label for="name">{{ __('Country Car') }}</label>
                                  <input type="text" name="country" class="form-control" placeholder="{{ __('Enter country car') }}">
                                </div>
                                <div class="col-12 col-sm-4 form-group">
                                  <label for="email">{{ __('Vehiacle ID') }}</label>
                                  <input type="text" name="num_car" class="form-control" placeholder="{{ __('Enter vehiacle id') }}">
                                </div>
                                <div class="col-12 col-sm-4 form-group">
                                  <label for="course">{{ __('User phone') }}</label>
                                  <input type="text" name="phone" class="form-control" placeholder="{{ __('Enter user phone') }}">
                                </div>
                              </div>
                              <div class="text-center">
                                <button type="submit" class="btn btn-primary">{{ __('Advance Search') }}</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <script>
                        var advancedSearchForm = document.getElementById('advanced-search-form');
                        var advancedSearchToggle = document.getElementById('advanced-search-toggle');

                        advancedSearchToggle.addEventListener('click', function() {
                          if (advancedSearchForm.style.display === 'none') {
                            advancedSearchForm.style.display = 'block';
                          } else {
                            advancedSearchForm.style.display = 'none';
                          }
                        });
                      </script>
                    {{-- {{ أزرار البحث }} --}}

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
                                    <th scope="col">{{ __('Contry') }}</th>
                                    <th scope="col">{{ __('ID') }}</th>
                                    <th scope="col">{{ __('Type') }}</th>
                                    <th scope="col">{{ __('Color') }}</th>
                                    <th scope="col">{{ __('User ID') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($car as $item)
                                    <tr>
                                <td>{{ $loop->iteration}}</td>

                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->num_car }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->color }}</td>
                                        <td>{{ $item->user_id }}</td>


                                       <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                            <form action="{{ route('car.destroy',  ['num_car' => $item->num_car, 'country' => $item->country])}}" method="post">


                                                <button type="button" class="dropdown-item"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>

                                            <a class="dropdown-item"
                                                href="{{ route('car.edit',  ['num_car' => $item->num_car, 'country' => $item->country])}}">{{ __('Edit') }}</a>

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
                            {{ $car->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
