@extends('layout')
@section('content')

<style>
</style>

<!--Page topic-->
<!--Page topic-->

<div class="" id="pwrapper1">
    @foreach($products as $product)
      <div class="">
          <div class="pageTopic addPro"><h2>{{ $product->name }}</h2></div>
      </div>

    <div class="form editProForm">
            <form method="POST", action="{{ route('updateProduct') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" class="form-control" id="id" name="id" value="{{$product->id}}">

                <div class="form-group addProRow3">
                    <div class=""></div>
                    <div class="">
                    <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="10%">
                    </div>
                </div>

                <div class="form-group addProRow1">
                    <label class="" for="Product ID">Product ID</label>
                    <div class="">
                        <input type="text" class="form-control" id="productID" name="productID" value="{{ $product->productID }}">
                    </div>
                    <label class="" for="Product Name">Product Name</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="productName" name="productName" value="{{ $product->name }}">
                    </div>
                    
                    <label class="" for="Product Image">Image</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="file" class="form-control" id="product-image" name="product-image" value="{{ $product->image }}">
                    </div>
                </div>

                <div class="form-group addProRow2">
                    <label class="" for="Product Price">Price</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="productPrice" name="productPrice" value="{{ $product->price }}">
                    </div>
                   
                    <label class="" for="Product Quantity">Quantity</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="number" class="form-control" id="productQuantity" name="productQuantity" value="{{ $product->quantity }}">
                    </div>
                    <label class="" for="Product Quantity">DownloadLink</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="downloadLink" name="downloadLink" value="{{ $product->downloadLink}}">
                    </div>
                    <label class="" for="Category ID">Category</label><span class="colorRed">*</span>
                    <div class="">
                    <select name="categoryID" id="categoryID" class="form-control">

                        @foreach($categoryID as $category)
                            <option value="{{$category->categoryID}}"
                            @if($product->categoryID==$category->categroyID)
                                selected
                            @endif
                                >{{$category->name}}</option>
                        @endforeach

                    </select>
                    </div>
                  
                   

                <div class="form-group addProRow3">
                    <label class="" for="Product Desciption">Description</label><span class="colorRed">*</span>
                    <div class="">
                        <textarea type="text" class="form-control" id="productDescription" name="productDescription" value="">{{ $product->description }}</textarea>
                    </div>
                </div>

                <div class="form-group addProRow4">
                    <label class="" for="Brand status">Status</label><span class="colorRed">*</span>
                    <div class="">
                    @if($product->status == 'Available')
                    <select name="status" class="form-control" required>
                        <option value="">---Select Status---</option>
                        <option value="Available" selected>Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>
                    @elseif($product->status == 'Unavailable')
                    <select name="status" class="form-control" required>
                        <option value="">---Select Status---</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable" selected>Unavailable</option>
                    </select>
                    @endif
                    </div>
                    <div class="">
                    <Button type="button" class="backBtn">
                        <a href="{{ route('viewProduct') }}" class="backToCategory" title="Back" data-toggle="tooltip">Back</a>
                    </Button>
                    <button type="submit" class="subBtn" title="Submit">Submit</button>
                    </div>
                </div>

                <div class="form-group addProRow5"></div>

            </form>
            @endforeach
    </div>
</div>

@endsection
