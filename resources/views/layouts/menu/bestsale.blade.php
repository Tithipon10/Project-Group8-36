@extends('welcome')

@section('content')
    
    <!-- product section starts  -->
    <div class="bg-center " id="scrollbar">
        <section class="product " id="product">
            <!-- <h1 class="heading">latest <span>products</span></h1> -->
            <div class="box-container">

                @foreach ($popular as $popular007)
                    <div class="box">
                        <span class="discount">TOP</span>
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-share"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <img alt="" style="width: 18vmin;"
                            src="{{ asset('admin/Popular_images/' . $popular007->image) }}">
                        <h3>{{ $popular007->popular }}</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <green style="color: #2dce89;">฿</green> {{ number_format($popular007->price) }} <span> ฿0
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>
    </div>
    </section>
    @include('layouts/layouts_v2/catagory')
    <!-- product section ends -->
@endsection
