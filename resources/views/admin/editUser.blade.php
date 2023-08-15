@extends('layout')
@section('content')

<style>
</style>

<!--Page topic-->
<!--Page topic-->

<div class="content" id="pwrapper1">
  <div class="">
          <div class="pageTopic addPro"><h2>User Detail</h2></div>
  </div>

  <div class="form addProForm row">
        <form method="POST" , action="{{ route('updateUser') }}" enctype="multipart/form-data">
        @csrf
        @foreach($users as $users)
        <input type="hidden" class="form-control" id="id" name="id" value="{{$users->id}}">

        <div class="form-group addProRow1">
            <label class="" for="supplierName">User Name</label>
            <div class="">
                <input type="text" class="form-control" id="name" name="name" style=" background:transparent;" value="{{$users->name}}">
            </div>
            <label class="" for="CompanyEmail">Contact Number</label>
            <div class="">
                <input type="text" class="form-control" id="contact" name="contact" style=" background:transparent;" value="{{$users->contact}}">
            </div>
        </div>

        <div class="form-group addProRow2">
            <label class="" for="contactPerson">Email</label>
            <div class="">
                <input type="text" class="form-control" id="email" name="email" style=" background:transparent;" value="{{$users->email}}">
            </div>

        </div>

       
        <div class="form-group addProRow4">
            <div class="">
            <Button type="button" class="backBtn">
                <a href="{{ route('viewUser') }}" class="" title="Back" data-toggle="tooltip">Back</a>
            </Button>
            <button type="submit" class="subBtn" title="Submit">Save</button>
            </div>
        </div>

        <div class="form-group addProRow5">

        </div>
        </form>
    @endforeach
  </div>
</div>

@endsection
