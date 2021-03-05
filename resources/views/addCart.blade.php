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
                        <div class="card-header">{{ __('Add to Cart') }}</div>
        
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <img class="detEmail" src="{{ asset('storage/images/' . $shoes->image) }}" height="200px" width="300px">
                                    </div>
                                    
                                    <div class="col-sm">
                                        <h3>{{$shoes->shoeName}}</h3>
                                        <h4>Price: Rp. {{number_format($shoes->price, 2, ',', '.')}}</h4>
                                        <h5>Description:</h5>
                                        <p class="text">{{$shoes->description}}</p>
                                    </div>
                                </div>

                                <form method="POST" action="{{ url('/insertCart') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $shoes->id }}" name="id">
                                        <input type="hidden" value="not complete" name="status">
                                        <label for="qty" class="col-md-4 col-form-label text-md-right">Quantity: </label>
                                        <input type="text" id="qty" name="qty">
                                    </div>
                                
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection