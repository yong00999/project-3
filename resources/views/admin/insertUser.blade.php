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
        <form method="POST" action="{{ route('addUser') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group addProRow1">
            <label class="" for="supplierName">User Name</label>
            <div class="">
                <input type="text" class="form-control" id="name" name="name" style=" background:transparent;">
            </div>
            <label class="" for="contactPerson">password</label>
            <div class="col-md-12 form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required autocomplete="new-password" style=" background:transparent;">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label class="" for="contactPerson">Confrim Password</label>
            </div>
            <div class="col-md-12 form-group">
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required autocomplete="new-password" style=" background:transparent;">
            </div>
        </div>

        <div class="form-group addProRow2">
            <label class="" for="contactPerson">Email</label>
            <div class="col-md-12 form-group">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" value="{{ old('email') }}" required autocomplete="email" style=" background:transparent;">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <label class="" for="CompanyEmail">Contact Number</label>
            <div class="">
                <input type="text" class="form-control" id="contact" name="contact" style=" background:transparent;" >
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

  </div>
</div>

@endsection
