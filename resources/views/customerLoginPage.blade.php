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
					<h1>Login / Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
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
							<h4><strong>New to our website?</strong></h4>
							<p>Welcome to our Online Shopping Portal! Please log in to explore our vast range of products, secure checkout, personalized recommendations, and swift delivery to your doorstep. If you need any assistance, our customer support is available 24/7. Happy shopping!</p>
							<button style=" border: 2px solid blue; border-radius: 25px;"><a class="button button-account" href="{{ url('customerRegisterPage') }}">Create an Account</a></button>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
                    <form class="" method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="login_form_inner">
                        
					<h4>Log in to enter</h4>
						<form class="row login_form" action="#/" id="contactForm" >
							<div class="col-md-12 form-group">
								<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address (xxx@gmail.com)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required autocomplete="current-password">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" style=" border: 2px solid ; border-radius: 25px;" class="button button-login w-100">{{ __('Login') }}</button>
								<a href="#">Forgot Password?</a>
							</div>
                            <br><br><br>
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
