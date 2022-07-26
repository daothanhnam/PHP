@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Add Product </h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom:10px">
        <a class="btn-btn-primary" href="{{route('product.index')}}"> Back</a>
    </div>
</div>
@if($error->any())
<div class="alert alert-danger">
    <strong>Oops!</strong>There were some problems with your input. <br><br>
    <ul>
        @foreach($error->all()as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('product.store')}}" method="post">
    @csrf   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="product_name" placeholder="product Name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>
                    Product Description:
                </strong>
                <textarea name="product_desc" placeholder="product Description" style="height: 150px;" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>
                    Qty:
                </strong>
                <input type="number" name="product_qty" placeholder="Quantity" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection