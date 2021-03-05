@extends('layouts.app')

@section('title', 'Add to Cart')

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
                        <div class="card-header">{{ __('Edit Cart') }}</div>
        
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <img class="detEmail" src="{{ asset('storage/images/' . $shoes->image) }}" height="200px" width="300px">
                                    </div>
                                    
                                    <div class="col-sm">
                                        <h3>{{$shoes->shoeName}}</h3>
                                        <h4>Price: Rp. {{number_format($shoes->price, 2, ',', '.')}}</h4>
                                        <p class="text">{{$shoes->description}}</p>
                                    
                                        <form method="POST" action="{{ url('/updateShoeCart') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="qty" class="col-md-3 col-form-label text-md-left">Quantity: </label>
                                            <input type="text" id="qty" name="qty">
                                            
                                            @error('qty')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="hidden" value="{{ $details->id }}" name="id">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>

                                        <form method="POST" action="{{ url('/deleteCart') }}">
                                            @csrf
                                            <div class="col-md">
                                                <input type="hidden" value="{{ $details->id }}" name="id">
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </div>
                                        </form>
                                        </div>
                                        
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection