@extends('shoppingPageLayout')
@section('content')
<style>
		.blog1{
		position: relative;
            transition: 0.2s ease;
            min-width: 200px;
            padding: 2%;
            border: 1px solid #cce7d0;
            border-radius: 20px;
            cursor: pointer;
            margin: 15px auto;
			width: 80%; 
            margin: 0 auto;
}

</style>
<!-- ================ start banner area ================= -->
<section class="blog1">
<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4><strong>Already have an account?</strong></h4>
							<p>Welcome to our Online Shopping Portal! Create an account to access a vast range of products, enjoy secure checkout, personalized recommendations, and swift delivery to your doorstep. If you have any questions or need assistance, our customer support is available 24/7. Let's get started with your shopping journey!</p>
							<button style=" border: 2px solid blue; border-radius: 25px;"><a class="button button-account" href="{{ url('customerLoginPage') }}">Login Now</a></button>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
					<div class="login_form_inner register_form_inner">
						<h3>Create an account</h3>
						<form class="row login_form" action="#/" id="register_form" >
							<div class="col-md-12 form-group">
								<input  type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="col-md-12 form-group">
								<input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address (XXX@gmail.com)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
								<input type="text" class="form-control  @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Contact Number (0XX-XXXX-XXXX)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" value="{{ old('contact') }}" required autocomplete="contact">
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          

                            <div class="col-md-12 form-group">
								<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required autocomplete="new-password">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>

							<div class="col-md-12 form-group">
								<button type="submit" value="submit" style=" border: 2px solid ; border-radius: 25px;" class="button button-register w-100">{{ __('Resgister') }}</button>
							</div>
						</form>
					</div>
                </form>
				</div>
			</div>
		</div>
	</section>
	</section>
	<br><br>
	<!--================End Login Box Area =================-->

@endsection
