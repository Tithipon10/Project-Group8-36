@extends('welcome')

@section('content')
    
    <!-- product section starts  -->
    <div class="bg-center " id="scrollbar">
        <section class="product " id="product">
            <!-- <h1 class="heading">latest <span>products</span></h1> -->
            <div class="box-container">

                @foreach ($product as $product007)
                    <div class="box">
                        <span class="discount">New</span>
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-share"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <img alt="" src="{{ asset('admin/Product_images/' . $product007->image) }}">
                        <h3>{{ $product007->product }}</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">
                            <green style="color: #2dce89;">฿</green> {{ number_format($product007->price) }} <span>
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </div>
    @include('layouts/layouts_v2/catagory')
    <!-- product section ends -->
@endsection



