<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="scrollbar">

@include('layouts/layouts_v2/head')

<body>
    <div class="main">
        <div class="no-highlight">
            @include('layouts/layouts_v2/BG')
            @include('layouts/layouts_v2/header')

            <!-- product section starts  -->
            <div class="bg-center " id="scrollbar">
                @if ($product->count() > 0 || $popular->count() > 0 )
                    <section class="product " id="product">
                        <div class="box-container">
                            @foreach ($product as $product007)
                                <div class="box">
                                    <span class="discount">New</span>
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="fas fa-share"></a>
                                        <a href="#" class="fas fa-eye"></a>
                                    </div>
                                    <img alt="" style="width: 18vmin;"
                                        src="{{ asset('admin/Product_images/' . $product007->image) }}">
                                    <h3>{{ $product007->product }}</h3>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div class="price">
                                        <green style="color: #2dce89;">฿</green>
                                        {{ number_format($product007->price) }}
                                        <span>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
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
                                        <green style="color: #2dce89;">฿</green>
                                        {{ number_format($popular007->price) }}
                                        <span> ฿0
                                        </span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </section>

                @else
                    <div class="container-fluid">
                        <div class="alert alert-danger" role="alert" style="margin-top: 1.5%;">
                            <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                            <span class="alert-text"><strong>ไม่มีข้อมูลของสินค้า! กรุณาค้นหาสินค้าใหม่อีกครั้ง</strong> </span>
                        </div>
                    </div>
                @endif

            </div>

            @include('layouts/layouts_v2/catagory')
            <!-- product section ends -->
            {{-- @include('layouts/log&register') --}}
            {{-- @include('layouts/footer') --}}
        </div>
    </div>

</body>
{{-- Script --}}
<script src="{{ asset('js/script.js') }}" defer></script>
<script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>

<!--   Core   -->
<script src="{{ asset('admin/assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!--   Optional JS   -->
<script src="{{ asset('admin/assets/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
<!--   Argon JS   -->
<script src="{{ asset('admin/assets/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
</script>

</html>
