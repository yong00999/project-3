@extends('shoppingPageLayout')
@section('content')
<style>
.product-img {
  width: 180px; 
  height: 180px;
   
}
.card-body{
  background-color: #ECECEC;
}
.product-card {
  margin-bottom: 20px;
  background-color: #F5F5DC; 
}
.row{
  position: relative;
  transition: 0.2s ease;
  min-width:200px;
  padding:2%;
  border: 1px solid #cce7d0;
  border-radius: 20px;
  cursor: pointer;
  margin:15px 80;
  
}
.sidebar-categories {
    background-color: #ECECEC;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .sidebar-categories .head {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .sidebar-categories ul.main-categories {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .sidebar-categories li.filter-list {
    margin-bottom: 5px;
  }

  .sidebar-categories li.filter-list a {
    color: #333;
    text-decoration: none;
    display: block;
    padding: 5px;
    border-radius: 5px;
    transition: background-color 0.2s ease;
  }

  .sidebar-categories li.filter-list a:hover {
    background-color: #ECECEC;
  }

.filter-bar-search input{
  border:1px solid #eee;
  font-size:14px;
  color:#FF0000;
  height:38px;
  padding-left:15px
}
.filter-bar-search input::placeholder{
  color:#999999
}
.filter-bar-search button{
  background:transparent;
  border:1px solid #eee;
  background:#fff;
  border-left:0;
  padding-right:15px;
}
.filter-bar-search button i,.filter-bar-search button span{
  font-size:14px;color:#000000
}
.card-body{
	height: 135px;
}
.card-img{
  height:150px
}

</style>
<!-- ================ category section start ================= -->
<section class="section-margin--small mb-5 shopping-page-container">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="sidebar-categories">
          <div class="head">Categories</div>
          <ul class="main-categories">
            <li class="common-filter">
              @foreach($categoryID as $category)
              <form action="{{route('search.product')}}" method="POST" id="filter">
                @csrf

                <li class="filter-list">
                  <a href="{{ route('getCatProduct',['catid'=>$category->categoryID]) }}">{{ $category->name }}</a>
                </li>

              </form>
              @endforeach
            </li>
          </ul>
        </div>
      </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
              <select onchange="window.location.href=this.options[this.selectedIndex].value;">
                <option value="1">--- Select Filter ---</option>
                <option value="{{ url('shoppingShowProductPage') }}">Default sorting</option>
                <option value="{{ url('priceLowToHigh') }}">Price low to high</option>
                <option value="{{ url('priceHighToLow') }}">Price high to low</option>
              </select>
            </div>
            <div class="sorting mr-auto">

            </div>
            <div>
            </form>
              <form class="input-group filter-bar-search" method="POST" action="{{route('search.product')}}">
              @csrf
                <input type="text" name="keyword" type="search" placeholder="Search Products" aria-label="Search">
                <div class="input-group-append">
                  <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Filter Bar -->
          <!-- Products -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
            @foreach($products as $product)
            @if($product->quantity == 0)
            <div></div>
            @else
              <div class="col-md-6 col-lg-4">
                <br>
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <img class="card-img" src="{{asset('images/')}}/{{$product->image}}" alt=""> 
                  </div>
                  
                  <div class="card-body">
                    <h4 class="card-product__title" style=""><a href="{{ route('shoppingShowProductDetails',['id'=>$product->id]) }}">{{$product->name}}</a></h4>
                 
                 

                 
                  </div>
                </div>
              </div>
             
              @endif
              @endforeach
            </div>
            <div class="paging">
            <span>{{$products->links()}}</span>
            </div>
          </section>


          <!-- Products -->
        </div>
      </div>
    </div>
  </section>
	<!-- ================ category section end ================= -->

@endsection
