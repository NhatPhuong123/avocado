@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('./css/products_details.css') }}">
@endsection

@section('content')
<section class="product__details">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <ul class="d-flex flex-column">
                    <li class="item-image"><a href=""><img src="./public/images/product_details/1.jpg" alt=""></a>
                    </li>
                    <li class="item-image"><a href=""><img src="./public/images/product_details/2.jpg" alt=""></a>
                    </li>
                    <li class="item-image"><a href=""><img src="./public/images/product_details/3.jpg" alt=""></a>
                    </li>
                    <li class="item-image"><a href=""><img src="./public/images/product_details/4.jpg" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <img src="{{ $product->img }}" alt="">
            </div>
            <div class="col-6 product__details__inner">
                <h1>{{ $product->name }}</h1>
                <div class="category d-flex">
                    <span>Category:</span>
                    <div class="accessories"><a href="">{{ $product->category->name }}</a></div>
                </div>

                <p>{{ $product->description }}</p>
                <ul class="price d-flex">
                    <li class="old-price">$15.21</li>
                    <li class="new-price">${{ $product->price }}</li>
                </ul>
                <div class="product-quantity d-flex align-items-center">
                    <span>Quantity :</span>
                    <div class="quantity">
                        <form action="">
                            <input type="number" value="1" min="1">
                        </form>
                    </div>
                </div>
                <button class="btn btn-outline-danger add-to-cart" type="button">Add to cart</button>
                <a href="#" class="add-to-cart btn btn-outline-danger">Buy Now</a>

            </div>
        </div>
    </div>
</section>
<section class="product__desc">
    <div class="container">
        <h1 class="text-center">Description</h1>
        <h2>Detail</h2>
        <p>{{ $product->description }}
        </p>
        <h2>Features</h2>
        <ul class="features_list">
            <li class="features_item">Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
            <li class="features_item">Irure dolor in reprehenderit in voluptate velit esse</li>
            <li class="features_item">Sed do eiusmod tempor incididunt ut labore et</li>
            <li class="features_item">Nisi ut aliquip ex ea commodo consequat.</li>
        </ul>
    </div>
</section>
@endsection