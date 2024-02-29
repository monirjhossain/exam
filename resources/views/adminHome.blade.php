@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>
                <div class="container mx-auto">

                    <div class="card-body text-center">
                        <div class="card text-white bg-success mb-2 text-center" style="max-width: 20rem;">
                        <div class="card-body">
                            <a href="http://127.0.0.1:8000/categories " style="text-decoration:none;"><h5 class="card-title text-white">Categories</h5></a>
                        </div>
                        </div>
                        <div class="card text-white bg-success mb-2" style="max-width: 20rem;">
                        <div class="card-body">
                            <a href="http://127.0.0.1:8000/products" style="text-decoration:none"><h5 class="card-title text-white">Products</h5></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection