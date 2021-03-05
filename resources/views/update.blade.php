@extends('layouts.app')

@section('title', 'Update')

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
                        <div class="card-header">{{ __('Edit Shoe') }}</div>
        
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <img class="detEmail" src="{{ asset('storage/images/' . $shoes->image) }}" height="200px" width="300px">
                                    </div>
                                    
                                    <div class="col-sm">
                                        <h3>{{$shoes->shoeName}}</h3>
                                        <h4>Price: Rp. {{$shoes->price}}</h4>
                                        <p class="text">{{$shoes->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ url('/update/' . $shoes->id) }}" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <label for="shoeName" class="col-md-4 col-form-label text-md-right">Shoe Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="shoeName" name="shoeName" placeholder="{{ $shoes->shoeName }}">
                                        
                                        @error('shoeName')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                                    
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="price" name="price" placeholder="{{ $shoes->price }}">
                                        
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="{{ $shoes->description }}"></textarea>
                                        
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" id="image" name="image">
                                        
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update Shoe</button>
                                </div>

                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection