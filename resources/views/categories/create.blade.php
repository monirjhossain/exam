@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-lg-6">
            <div class="">
                <h2>Add New Category</h2>
            </div>
            <div class="r-5">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>
       
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
         <div class="row">
            <div class="col-md-3">
                <div class="form-group r-3">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Enter Category"><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
