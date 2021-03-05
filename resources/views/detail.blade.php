@extends('layouts.app')

@section('title', 'Shoe Detail')

@section('content')
    <div class="sidenav">
        <a href="/">View All Shoe</a>
        @auth
            @if($role == 'admin')
                <a href="/addShoe">Add Shoe</a>
            @else
                <a href="/viewCart">View Cart</a>
            @endif
                <a href="/viewTrans">View Transaction</a>
        @endauth
    </div>

    <!-- Page content -->
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img class="detEmail" src="{{ asset('storage/images/' . $shoes->image) }}" height="300px" width="450px">
                </div>
                <div class="col-sm">
                    <h1>{{$shoes->shoeName}}</h1>
                    <h3>Price: Rp. {{number_format($shoes->price, 2, ',', '.')}}</h3>
                    <h5>Description:</h5>
                    <p class="text">{{$shoes->description}}</p>
                    @auth
                        @if($role == 'admin')
                            <a class="text" href="{{ url('updateShoe/' . $shoes->id) }}">Update Shoe</a>
                        @else
                            <a class="text" href="{{ url('addCart/' . $shoes->id) }}">Add to Cart</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>

@endsection