@extends('layout')
@section('content')

<style>
</style>

<!--Page topic-->

<!--Page topic-->

<div class="" id="pwrapper1">
  <div class="">
      <div class="col-sm">
      <div class="pageTopic addPro"><h2>Edit Category</h2></div>
      </div>
  </div>
  <div class="row editProForm">
  <div class="">
    <form method="POST" , action="{{ route('updateCategory') }}" enctype="multipart/form-data">
      @csrf
      @foreach($category as $category)
      <input type="hidden" class="form-control" id="id" name="id" value="{{$category->id}}">

      <div class="form-group addProRow1">
        <label class="" for="categoryID">Category ID</label><span class="colorRed">*</span>
        <div class="">
          <input type="text" class="form-control" id="CategoryID" name="CategoryID" value="{{$category->categoryID}}" readonly>
        </div>
        <label class="" for="Category Name">Name</label><span class="colorRed">*</span>
        <div class="">
          <input type="text" class="form-control" id="CategoryName" name="CategoryName" style=" background:transparent;" value="{{$category->name}}" required>
        </div>
        <label class="col-md-4 col-form-label text-md-right" for="Category status">Status</label><span class="colorRed">*</span>
        
        <div class="col-md-6">
          @if($category->status == 'Available')
          <select name="status" class="form-control" required>
            <option value="">---Select Status---</option>
            <option value="Available" selected>Available</option>
            <option value="Unavailable">Unavailable</option>
          </select>
          @elseif($category->status == 'Unavailable')
          <select name="status" class="form-control" required>
            <option value="">---Select Status---</option>
            <option value="Available">Available</option>
            <option value="Unavailable" selected>Unavailable</option>
          </select>
          @endif
        </div>
        <div class="col-md-6 offset-md-4">
          <Button type="button" class="backBtn">
            <a href="{{ route('viewCategory') }}" class="backToCategory" title="Back" data-toggle="tooltip">Back</a>
          </Button>
          <button type="submit" class="subBtn" title="Submit">Submit</button>
        </div>
      </div>
    </form>
  @endforeach
  </div>
  </div>
</div>

@endsection