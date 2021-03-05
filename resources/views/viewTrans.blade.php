@extends('layouts.app')

@section('title', 'View Transaction')

@section('content')
<div class="sidenav">
    <a href="/">View All Shoe</a>
    <a href="/viewCart">View Cart</a>
    <a href="/viewTrans">View Transaction</a>
</div>

    <!-- Page content -->
    <div class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12"> <!-- pke col-md-12-->
                    <div class="card">
                        <div class="card-header">{{ __('View All Transaction') }}</div>
                        <div class="card-body">
                        @if(count($headers))
                            @foreach($headers as $header)
                                <div class="row">
                                    <div class="col-sm">
                                        <h5 class="text-center">{{ $header->Date }}</h5>
                                    </div>
    
                                    <div class="col-sm">
                                        <h5 class="text-center">Total Rp. {{ number_format($header->total, 2, '.', '.') }}</h5>
                                    </div>
                                </div>

                                <div class="row">
                                @foreach($header->details as $detail)
                                    @foreach($detail->shoe as $shoes)
                                        <a href="{{ url('detail/' . $shoes->id) }}" class="trans">
                                            <img src="{{ asset('storage/images/' . $shoes->image) }}" class="imgTrans">
                                            <p>{{$shoes->shoeName}}</p>
                                            <span>Quantity: {{$detail->qty}}</span>
                                            <p>Sub Total: Rp. {{number_format($detail->qty * $shoes->price, 2, ',', '.')}}</p>
                                        </a>
                                    @endforeach
                                @endforeach
                                </div>
                            @endforeach
                        @else
                            <h2>Please make some transaction to access this page</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection