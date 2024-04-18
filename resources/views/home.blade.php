@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./img/image.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Categorías</h5>
                          <a href="categories" class="btn btn-primary">Ver</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
