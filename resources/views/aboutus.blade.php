@extends('shoppingPageLayout')
@section('content')
<style>
 .about-us-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

.about-us-content {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    width: 60%;
}

.about-us-content h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.about-us-content p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}

</style>

    <!--================ Hero banner start =================-->
    <title>SDP</title>
  </head>
  <body style="background-color: rgb(212, 212, 212);"></body>

<div class="about-us-container">
    <div class="about-us-content">
        <h1>About Us</h1>
        <p>Welcome to our website. We are a team of passionate individuals...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>
</div>

@endsection