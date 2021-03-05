@extends('layouts.app')

@section('title', 'Add Shoe')

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
                        <div class="card-header">{{ __('Add Shoe') }}</div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ url('/inputShoe') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="shoeName" class="col-md-4 col-form-label text-md-right">Shoe Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="shoeName" name="shoeName">
                                        
                                        @error('shoeName')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                                    
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="price" name="price">
                                        
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="description"></textarea>
                                        
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
                                    <button type="submit" class="btn btn-primary">Add Shoe</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection