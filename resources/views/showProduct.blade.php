@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="{{ asset('images/') }}/{{$product->Image}}" alt="" width="100" class="img-fluid"></td>
                    <td>{{$product->Name}}</td>
                    <td>{{$product->Description}}</td>
                    <td>RM{{$product->Price}}</td>
                    <td>{{$product->Quantity}}</td>
                    <td>{{$product->CategoryID}}</td>
                    <td><a href="{{ route('editProduct',['id'=>$product->id])}}" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                    <a href="{{route('deleteProduct',['id'=>$product->id])}} " class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete this product?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection