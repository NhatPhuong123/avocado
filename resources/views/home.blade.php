@extends('master')

@section('title', 'Home Page')

@section('content')
<section class="new__product">
  <div class="container">
    <div class="row text-center brown__btn">
      <div class="col-6 position-relative"> <a href=""><img src="{{ asset('./images/HomePage/NewProductLeft.jpg') }}"
            alt=""></a>
        <div class="new__product__content"> <a href="">
            <h2>New Product Collection</h2>
          </a>
          <div><a href="">SHOP NOW --</a></div>
        </div>
      </div>
      <div class="col-6 position-relative"> <a href=""><img src="{{ asset('./images/HomePage/NewProductRight.jpg') }}"
            alt=""></a>
        <div class="new__product__content"> <a href="">
            <h2>Basket Collection</h2>
          </a>
          <div><a href="">SHOP NOW --</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="best__product">
  <div class="container text-center">
    <h2>Best Products</h2>
    <div class="row">

      @foreach ($productList as $product)
        <div class="col-3 best__product-items">
        <div class="item-thumb"><img src="{{ $product->img }}" alt="" width="300px" height="300px">
          <div class="item-hover brown__btn">
            <div class="item-hover__inner d-flex flex-column justify-content-center">
              <h3><a href="{{ route('product.detail', $product->id) }}">{{ $product->name }}</a></h3>
              <p>${{ $product->price }}</p>
              <ul class="d-flex justify-content-center">
                <li><a href=""><i class="fa-solid fa-plus"></i></a></i></li>
                <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
      @endforeach

    </div>

  </div>
</section>
<section class="news">
  <div class="container">
    <h2 class="text-center">Recent News</h2>
    <div class="row">
      <div class="col-4 news__item"> <img src="{{ asset('./images/HomePage/blog_img1.jpg') }}" alt="">
        <div class="news__item__hover">
          <p>By: Hieu Nguyen</p>
          <p>Lorem ipsum dolor sit amet consectetu<br>adipisicing elit sed do eius.</p>
          <div class="read__more__btn brown__btn"> <a href="">Read More</a> </div>
        </div>
      </div>
      <div class="col-4 news__item"> <img src="{{ asset('./images/HomePage/blog_img2.jpg') }}" alt="">
        <div class="news__item__hover">
          <p>By: Hieu Nguyen</p>
          <p>Lorem ipsum dolor sit amet consectetu<br>adipisicing elit sed do eius.</p>
          <div class="read__more__btn brown__btn"> <a href="">Read More</a> </div>
        </div>
      </div>
      <div class="col-4 news__item"> <img src="{{ asset('./images/HomePage/blog_img3.jpg') }}" alt="">
        <div class="news__item__hover">
          <p>By: Hieu Nguyen</p>
          <p>Lorem ipsum dolor sit amet consectetu<br>adipisicing elit sed do eius.</p>
          <div class="read__more__btn brown__btn"> <a href="">Read More</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection