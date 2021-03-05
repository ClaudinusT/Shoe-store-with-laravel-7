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
                                    @foreach($items as $item)
                                    <div class="col-sm">
                                        <a href="{{ url('detail/' . $item->id) }}">
                                            <img src="{{ asset('storage/images/' . $item->image) }}" height="150px" width="190px">
                                            <p>{{$item->shoeName}}</p>
                                        </a>
                                        <span style=" color:black"><b>Rp.{{number_format($item->price, 2, ',', '.')}}</b></span>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <div class=".pagination">
                                    {{ $items->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
