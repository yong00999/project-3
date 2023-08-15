@extends('shoppingPageLayout')
@section('content')
<style>
  .main-home{
  max-width: 100%;
  height: 70vh;
  background-image:url('images/allgame1.jpg');
  background-position: center;
  background-size:cover;
  display: grid;
  grid-template-columns: repeat(1,1fr);
  align-items: center;
  
}

.main-text .container h1{
  font-size:22px;
  text-transform: capitalize;
  line-height:1.1;
  padding: 0 0 0 25rem;
  width:700px ;
  height:20px;
}
.main-text .container  .main-btn{
  display: inline-block;
  color: #111;
  font-size:50px;
  font-weight:500;
  text-transform:capitalize;
  border: 1px;
  padding: 0 0 0 28rem;
  transition:all .42s ease;
  justify-self: end; 

}
.center-text {
  
  text-align: center;
  padding: 1rem 0;
}
.products{
  display: grid;
  grid-template-columns:repeat(auto-fit,minmax(300px,auto));
  gap:2rem;
}
.row{
  position: relative;
  transition: 0.2s ease;
  min-width:250px;
  padding:5%;
  border: 1px solid #cce7d0;
  border-radius: 25px;
  cursor: pointer;
  box-shadow:20px 20px 30px resourcebundle_get_error_message;
  margin:15px 0;
}
.row1{
  position: relative;
  transition: 0.2s ease;
  min-width:250px;
  padding:5%;
  border: 1px solid #cce7d0;
  border-radius: 25px;
  cursor: pointer;
  box-shadow:20px 20px 30px resourcebundle_get_error_message;
  margin:15px 0;
}
.row img{
  width: 80%;
  height: 170px;
  transition: all .40s;
  border-radius: 25px;
}
.row1 img{
  width: 80%;
  height: 350px;
  transition: all .40s;
  border-radius: 25px;
}
.row1 img:hover{
  transform: scale(0.9);
}
.row img:hover{
  transform: scale(0.9);
}
.heart-icon{
  position:absolute;
  right:0;
  font-size:20px;
}
.section-p1{
  padding:40px 80px;
}
#sm-banner{
  display:flex;
  justify-content:space-between;
  flex-wrap:wrap;
  
}
.banner-box{
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:center;
  min-width: 400px;  height:30vh;
  background-size:cover;
  background-position:center;
  

}
.banner-box:nth-child(1) {
  background-image: url({{asset('images/b3.jpg')}});
}
.banner-box h4{
  color:#000;
  font-size:30px;
  font-weight:300;
   text-align: center; 
  margin:auto;
  
}
.banner-box:nth-child(2){
  background-image:url({{asset('images/b4.jpg')}}); 
 
 
}
.banner-box:nth-child(3){
  background-image:url({{asset('images/b2.jpg')}}); 
 
 
}
button.normal{
  font-size:14px;
  font-weight:600;
  padding:15px 30px;
  color:#000;
  background-color:#000;
  cursor:pointer;
  border:none;
  outline:none;
  transition:0.2s;

}
button.white{
  font-size:13px;
  font-weight:600;
  padding:11px 30px;
  color:#000;
  background-color:transparent;
  cursor:pointer;
  border:1px solid #000;
  outline:none;
  transition:0.2s;
  margin:auto;
}
.section-m1{
  margin:40px 0;
}
#banner{
  display: flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:center;
  width:100%;
  height:40vh;
  background-image:url({{asset('images/b2.jpg')}}); 
}  
#banner h4{
  color:#000;
  font-size: 25px;
}
.text1{
  font-size:28px;
  text-transform: capitalize;
  line-height:1.8;
  text-align: center;
  display: inline-block;
  font-weight:700;
  border-radius: 50%; 
  
  
  
  
}
</style>

    <!--================ Hero banner start =================-->
    <section class="main-home">
  <div class="main-text">
   
  </div>
</section>

<section class="trending-product" id="trending">
   <div class="center-text">
   <h2>Feature Product</h2>
   <p>Exploring the Gaming World</p>
</div>
    <div class="products">
     <div  class="row">
     <a href="shoppingShowProductDetails/2"><img src="images/eldenring1.jpg" alt=""> </a>  
    

      <div class="price">
      <h3>  Elden Ring</h3> 
       
       
</div>
</div>
<div  class="row">
  
<a href="shoppingShowProductDetails/3"><img src="images/deathstranding.jpg" alt=""></a>

      <div class="price">
      <h3> Deathstranding</h3> 
      
       
</div>
</div>
<div  class="row">
<a href="shoppingShowProductDetails/4"><img src="images/fnaf.jpg" alt=""></a>

     
      <div class="price">
      <h3> Five Nights at Freddy's: Security Breach</h3> 
      
       
</div>
</div>
<div  class="row">
<a href="shoppingShowProductDetails/5"><img src="images/callisto.jpg" alt=""></a>
     
      
      <div class="price">
      <h3>Callisto Protocol </h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/12"><img src="images/suzume.jpg" alt=""></a>
     
     

      <div class="price">
      <h3>SUZUME</h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/13"><img src="images/opp1.jpg" alt=""></a>
     
     
      <div class="price">
      <h3> Oppenheimer</h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/17"><img src="images/dazai2.jpg" alt=""></a>

      
      <div class="price">
      <h3>No Longer Human </h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/18"><img src="images/cat.jpg" alt=""></a>
     
      <div class="price">
      <h3>I am a Cat </h3> 
       
       
</div>
</div>
</div>
</section> 
<section id="banner" class="section-m1 ">
  <h4>Coming Soon</h4>
  <span>Don't miss our new product!  </span>
</section>
<div class= "text1">
<p>&nbsp;&nbsp;&nbsp;&nbspLatest Game</p>
</div>

<div class="products">
     <div  class="row">
     
     <a href="shoppingShowProductDetails/2"><img src="images/eldenring1.jpg" alt=""></a>   
     
      <div class="price">
      <h3> &nbsp; Elden Ring</h3> 
      
       
</div>
</div>
<div  class="row">
<a href="shoppingShowProductDetails/3"><img src="images/deathstranding.jpg" alt=""></a>
     
      
      <div class="price">
      <h3> Deathstranding</h3> 
       
      
</div>
</div>
<div  class="row">
<a href="shoppingShowProductDetails/4"><img src="images/fnaf.jpg" alt=""></a>

      
      <div class="price">
      <h3> Five Nights at Freddy's: Security Breach</h3> 
       
       
</div>
</div>
<div  class="row">
<a href="shoppingShowProductDetails/5"><img src="images/callisto.jpg" alt=""></a>
     
      <div class="price">
      <h3>Callisto Protocol </h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/6"><img src="images/dying22.jpg" alt=""></a>
     
    

      <div class="price">
      <h3> &nbsp; Dying Light: Stay Human</h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/7"><img src="images/detroit1.jpg" alt=""></a>
     
      
      <div class="price">
      <h3> Detroit: Become Human</h3> 
      
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/8"><img src="images/ff7.1.jpg" alt=""></a>

      
      <div class="price">
      <h3> Crisis Core: Final Fantasy VII</h3> 
      
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/9"><img src="images/dragon8.2.jpg" alt=""></a>
     
      
      <div class="price">
      <h3>Like a Dragon Gaiden: The Man Who Erased His Name </h3> 
       
       
</div>
</div>
</div>
</div>
<div class="text1">
<p>&nbsp;&nbsp;&nbsp;&nbsp;Latest Movie</p>
</div>


<div class="products">
     

<div class="row1">
<a href="shoppingShowProductDetails/13"><img src="images/opp1.jpg" alt=""></a>
     
    

      <div class="price">
      <h3> &nbsp; Oppenheimer</h3> 
      
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/14"><img src="images/mip2.jpg" alt=""></a>

      
      <div class="price">
      <h3> Mission: Impossible - <br>Dead Reckoning Part One </h3> 
       
       
</div>
</div>

<div  class="row1">
<a href="shoppingShowProductDetails/12"><img src="images/suzume.jpg" alt=""></a>

      
      <div class="price">
      <h3> Suzume </h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/15"><img src="images/johnw.jpg" alt=""></a>
     
      
      <div class="price">
      <h3>John Wick: Chapter 4 </h3> 
       
       
</div>
</div>
</div>

<div class="text1">
<p>&nbsp;&nbsp;&nbsp;Must Watch Book</p>
</div>

<div class="products">
     <div  class="row1">
     
     <a href="shoppingShowProductDetails/17"><img src="images/dazai2.jpg" alt=""></a>   
     
      <div class="price">
      <h3> &nbsp; No Longer Human</h3> 
      
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/18"><img src="images/cat.jpg" alt=""></a>
     
      
      <div class="price">
      <h3> I am a Cat</h3> 
       
      
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/19"><img src="images/rashomon1.jpg" alt=""></a>

      
      <div class="price">
      <h3> Rashomon</h3> 
       
       
</div>
</div>
<div  class="row1">
<a href="shoppingShowProductDetails/20"><img src="images/19841.jpg" alt=""></a>
     
      <div class="price">
      <h3>Nineteen Eighty-Four </h3> 
       
       
</div>
</div>

</div>

<section id="sm-banner" class="section-p1">
  <div class="banner-box ：nth-child(1)">
    
    <h4>Top Seller</h4>
    <a href="priceLowToHigh"><button class="white">View more</button></a>
  </div>
  <div class="banner-box ：nth-child(1)">
  
    <h4>New Releases</h4>
    <a href="getCatProduct/Game1"><button class="white">View more</button></a>
  </div> 
  <div class="banner-box ：nth-child(3)">
  
    <h4>Must-Watch Movies</h4>
    <a href="getCatProduct/Movie1"><button class="white">View more</button></a>
  </div> 
</section>

    <!--================ Hero banner start =================-->
@endsection