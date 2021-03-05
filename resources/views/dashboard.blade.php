@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="sidenav">
        <a href="/">View All Shoe</a>
        @auth
            <a href="/viewCart">View Cart</a>
            <a href="/viewTrans">View Transaction</a>
        @endauth
    </div>

    <!-- Page content -->
    <div class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
        
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    @foreach($shoes as $shoe)
                                    <div class="col-sm">
                                        <a href="{{ url('detail/' . $shoe->id) }}">
                                            <img src="{{ asset('storage/images/' . $shoe->image) }}" height="150px" width="190px">
                                            <p>{{$shoe->shoeName}}</p>
                                        </a>
                                        <span style=" color:black"><b>Rp.{{number_format($shoe->price, 2, ',', '.')}}</b></span>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <div class=".pagination">
                                    {{ $shoes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
