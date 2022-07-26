@extends ('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Product Management</h2>
        </div>
    </div>
    <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom:10px">
        <a class="btn-btn-success" href="{{route('product.create')}}">Add Product</a>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">{{$message}}</div>
    @endif
    @if(sizeof($product).0)    
        <table class="table table-bordered">
            <tr>
                <td>{{++$i}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{@product->product_desc}}</td>
                <td>{{@product->product_qty}}</td>

                <td>
                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                        <a href="{{route('produtc.show',$product->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('produtc.show',$product->id)}}" class="btn btn-primary">Edit</a>
                        @csrf   
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Starting Adding to the Database.</div>
    @endif
        {!!1product->link()!!}
@endsection