@extends('layout')
@section('content')
<style>
    .alert-success{
        padding: 10px;
        background-color: #2d8a39;
        color: white;
    }
</style>

<!--Page topic-->
@if(Session::has('sucess'))

    <div class="alert alert-success" role="alert">

        {{Session::get('sucess')}}

    </div>

@endif
<!--Page topic-->

    <div id="pwrapper1">
        <div class="productRow1">
            <div class="col-sm-10">
                <div class="pageTopic"><h2>Product List</h2></div>
            </div>
            <div class="addProBtn">
                <div class="p-3">
                    <Button type="button" class="addButton">
                        <a href="{{ route('insertProduct') }}" class="addProduct" title="New" data-toggle="tooltip"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add Product</a>
                    </Button>
                </div>
            </div>
        </div>

        <div class="iq-search-bar device-search">
            <form method="POST" action="{{route('search.adminProduct')}}" class="searchbox">
            @csrf
                Search:<a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <input type="text" name="keyword" type="search" placeholder="Search" aria-label="Search">
                <button type="submit"></button>
            </form>
        </div>
    </div>

    <div class="" id="pwrapper2">
        <table class="table">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity</th>
                <th scope="col">Download Link</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
        <tbody>
        @forelse($products as $product)
        @if($product->quantity == 0)
            <tr>
                <td width="50">
                </td>
                <td class="link">
                    <div class="p-2" style="color: red; font-weight: bold;">{{$product->productID}}</div>
                </td>
                <td class="link">
                <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="60" height="50">
                    <div class="p-2">{{$product->name}}</div>
                </td>
                <td class="link">
                    <div class="p-2" style="color: red; font-weight: bold;">{{$product->catname}}</div>
                </td>
                <td class="link">
                    <div class="p-2" style="color: red; font-weight: bold;">{{$product->quantity}}</div>
                </td>
                <td class="link">
                    <div class="p-2" style="color: red; font-weight: bold;">{{$product->downloadLink}}</div>
                </td>
                <td>
                    <Button type="button" class="editBtn">
                        <a href="{{ route('editProduct',['id'=>$product->id]) }}" class="editProduct fa fa-edit" title="View details" data-toggle="tooltip"></a>
                    </Button>

                    <button type="button" class="deleteBtn">
                        <a href="{{ route('deleteProduct',['id'=>$product->id]) }}" class="deleteProduct fa fa-trash-o" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"></a>
                    </button>
                </td>
            </tr>
            @else
            <tr>
                <td width="50">
                </td>
                <td class="link">
                    <div class="p-2" >{{$product->productID}}</div>
                </td>
                <td class="link">
                <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="60" height="50">
                    <div class="p-2">{{$product->name}}</div>
                </td>
                <td class="link">
                    <div class="p-2">{{$product->catname}}</div>
                </td>
                <td class="link">
                    <div class="p-2">{{$product->quantity}}</div>
                </td>
                <td class="link">
                    <div class="p-2">{{$product->downloadLink}}</div>
                </td>
                <td>
                    <Button type="button" class="editBtn">
                        <a href="{{ route('editProduct',['id'=>$product->id]) }}" class="editProduct fa fa-edit" title="Edit" data-toggle="tooltip"></a>
                    </Button>

                    <button type="button" class="deleteBtn">
                        <a href="{{ route('deleteProduct',['id'=>$product->id]) }}" class="deleteProduct fa fa-trash-o" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"></a>
                    </button>
                </td>
            </tr>
            @endif
            @empty
            <tr>
                <td width="50">
                </td>
                <td class="link">
                    No product found.
                </td>
            </tr>

        @endforelse
        </tbody>

        </table>
    </div>



    {{$products->links()}}

@endsection
