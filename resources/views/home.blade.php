@extends('layouts.app')

@section('title', 'home')

@section('content')
<div class="sidenav">
        <a href="#">View All Shoe</a>
        <a href="#">View Cart</a>
        <a href="#">View Transaction</a>
    </div>

    <!-- Page content -->
    <div class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12"> <!-- pke col-md-12-->
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if(session('status'))
                                <div class="alret alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection