@extends('layout')
@section('content')

<style>
</style>

<!--Page topic-->
<!--Page topic-->

<div class="content" id="pwrapper1">
      <div class="col-sm">
          <div class="pageTopic addPro"><h2>Add Product</h2></div>
      </div>

        <div class="form addProForm">
            <form method="POST", action="{{ route('addProduct') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group addProRow1">
                    <label class="" for="Product ID">Product ID</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="productID" name="productID" required>
                    </div>
                    <label class="" for="Product Name">Product Name</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="productName" name="productName" required>
                    </div>
                    <label class="" for="Product Image">Image</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="file" class="form-control" id="product-image" name="product-image" required>
                    </div>
                </div>

                <div class="form-group addProRow2">
                    <label class="" for="Product Price">Price</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="productPrice" name="productPrice" required>
                    </div>
                    
                    <label class="" for="Product Quantity">Quantity</label> <span class="colorRed">*</span>
                    <div class="">
                        <input type="number" class="form-control" id="productQuantity" name="productQuantity" required>
                    </div>
                    <label class="" for="Download Link">downloadLink</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="downloadLink" name="downloadLink" required>
                    </div>
                    <label class="" for="Category ID"><a href="{{ route('insertCategory') }}" style="text-decoration:none; color:black;">Category</a></label><span class="colorRed">*</span>
                    <div class="">
                    <select name="categoryID" id="categoryID" class="form-control" required><span class="colorRed">*</span>

                        <option value="">---Select Category---</option>

                        @foreach($categoryID as $category)

                        <option value="{{$category->categoryID}}">{{$category->name}}</option>

                        @endforeach

                    </select>
                </div>
                    
                </div>

                <div class="form-group addProRow3">
                    <label class="" for="Product Desciption">Description</label><span class="colorRed">*</span>
                    <div class="">
                        <textarea type="text" class="form-control" id="productDescription" name="productDescription" required></textarea>
                    </div>
                </div>

                <div class="form-group addProRow4">
                    <label class="" for="Brand status">Status</label><span class="colorRed">*</span>
                    <div class="">
                    <select name="status" class="form-control selectAvai" required>
                        <option value="">---Select Status---</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>
                    </div>
                    <div class="">
                    <Button type="button" class="backBtn">
                        <a href="{{ route('viewProduct') }}" class="" title="Back" data-toggle="tooltip">Back</a>
                    </Button>
                    <button type="submit" class="subBtn" title="Submit">Submit</button>
                    </div>
                </div>

                <div class="form-group addProRow5"></div>
                
            </form>
        </div>
</div>

@endsection
