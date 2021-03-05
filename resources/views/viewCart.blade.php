@extends('layouts.app')

@section('title', 'View Cart')

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
                        <div class="card-header">{{ __('View Cart') }}</div>
                        
                        <div class="card-body">
                            @if(count($headers))
                                @foreach($headers as $header)
                                    @foreach($header->details as $detail)
                                        @foreach($detail->shoe as $shoes)
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <img src="{{ asset('storage/images/' . $shoes->image) }}" alt="" height="120px" width="160px">
                                                    </div>

                                                    <div class="col-sm">
                                                        <a href="{{ url('detail/' . $shoes->id) }}">
                                                            {{ $shoes->shoeName }}
                                                        </a>
                                                    </div>

                                                    <div class="col-sm">
                                                            {{ $detail->qty }}
                                                    </div>
                                                        
                                                    <div class="col-sm">
                                                        Rp. {{number_format($detail->qty * $shoes->price, 2, ',', '.')}}
                                                    </div>
                                                        
                                                    <div class="col-sm">
                                                        <a class="btn btn-primary" href="{{ url('/editCart/' . $detail->id) }}" role="button">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                @endforeach
                                <form action="{{ url('/checkout') }}" method="POST">
                                    @csrf
                                    @foreach($headers as $header1)
                                        <input type="hidden" value="{{ $header1->id }}" name="id">
                                    @endforeach
                                    <input type="hidden" value="completed" name="status">
                                    <button class="btn btn-primary">Checkout</button>
                                </form>
                            @else
                                <h2>Add some item(s) to access this page</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection