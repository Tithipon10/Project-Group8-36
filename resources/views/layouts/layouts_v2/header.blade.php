<div class="logo">
    <div class="top">
        <a href="/" class="logo-circle">
            <img src="{{ asset('image/Logo-store.png') }}" style="z-index: 1;">
        </a>

        <div style="z-index:999;">

            <center>
                <a href="/" class="logo-text">
                    <img src="{{ asset('image/logo-text.png') }}" style="z-index: 1;">
                </a>
            </center>
            <fieldset>
                <form action="{{ url('/product/search') }}" method="get">
                    <input type="text" placeholder="Search.." name="search">
                    <input type="image" src="{{ asset('image/search.png') }}" id="search" name="search">
                </form>
            </fieldset>
            <br>
            
            <a href="{{ route('product') }}" class="text-border pulse split1">หน้าแรก</a>&nbsp
            <a href="{{ route('bestsale') }}" class="text-border pulse split2">สินค้ายอดนิยม</a>&nbsp
            <a href="{{ route('map') }}" class="text-border pulse split3">ตำแหน่งที่ตั้งร้าน</a>&nbsp
            <a href="{{ route('contact') }}" class="text-border pulse split4">ผู้จัดทำ</a>

        </div>

        <div style="z-index:999;">
            @if (Route::has('login'))
                <div class="top-right links">
                @auth
                        @if (Auth::user()->isAdmin())
                            <a href="{{ url('admin/dashboard') }}" id="border-home">Home</a>
                        @endif
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            id="border-logout">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else

                        {{-- <a href="{{ route('login') }}" id="border-log">เข้าสู่ระบบ</a> --}}

                        <a class="media-body mb-0 " id="border-log" type="button" data-toggle="modal"
                            data-target="#modal-form">เข้าสู่ระบบ</a>

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}" id="border-register">สมัครสมาชิก</a> --}}

                            <a class="media-body mb-0 " id="border-register" type="button" data-toggle="modal"
                                data-target="#modal-form2">สมัครสมาชิก</a>
                        @endif
                @endauth
                </div>
            @endif
            @if (Route::has('login'))
                @auth
                    <div class="profile">
                        <p class="textprofile text-dark text-profile-user-admin">Profile</p>                    
                        @if (Auth::user()->isAdmin())
                        <input type="image" class="user_image profile-admin-pic-web" src="{{ asset('image/owner.png') }}">
                            <a class="btn btn-sm btn-success float-right profile-admin-show-stutus profile-admin-show-stutus01" >Admin</a>
                        @else 
                        <input type="image" style="border: 5px solid #8f5c63; align-items: center; border-radius: 50% !important" 
                        src="{{ asset('image/client.png') }}" class="user_image">
                        <div class="online onlne-name-user-admin"></div>
                        @endif
                        <p class="username text-dark text-name-user">{{ Auth::user()->username }}</p>
                    </div>
                @endauth
            @endif
        </div>
    </div>
</div>

@include('layouts/layouts_v2/login_pop-up')
@include('layouts/layouts_v2/register_pop-up')
