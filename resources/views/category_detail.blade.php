@extends('master')

@section('title', 'Category Page')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('./css/category.css') }}">
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <div class="filter__menu">
                <div class="row justify-content-between brown__btn">
                    <div class="content__menu col-6">
                        <ul class="d-flex flex-row">
                            <li class=""><a href="">ALL</a></li>
                            @foreach ($categoryList as $cat)
                                <li class=""><a href="{{ route('category.detail', $cat->id) }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter col-1"><a href="">FILTER</a></div>
                </div>
            </div>
            <div class="content__inner brown__btn">
                <div class="row">
                    @foreach ($category->products as $product)
                        <div class="col-3 product__item">
                            <div class="product-thumb">
                                <div><a href="{{ route('product.detail', $product->id) }}"><img src="{{ $product->img }}" alt=""></a></div>
                                <div class="product__inner">
                                    <ul class="d-flex justify-content-center">
                                        <li><a href=""><i class="fa-solid fa-plus"></i></a></i></li>
                                        <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
                                        <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-desc">
                                <h3><a href="{{ route('product.detail', $product->id) }}">{{ $product->name }}</a></h3>
                                <ul class="product-price d-flex">
                                    <li class="old-price">{{ $product->price }}$</li>
                                    <li class="new-price">10.00$</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
