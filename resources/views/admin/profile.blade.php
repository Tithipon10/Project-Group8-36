@extends('admin.index_profile')

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('update'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'แก้ไขข้อมูลเรียบร้อย'
            })
        </script>
    @endif
    @if (session('delete'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'ลบข้อมูลเรียบร้อย'
            })
        </script>
    @endif
    <script>
        window.deleteConfirm = function(id, url) {
            Swal.fire({
                icon: "warning",
                title: "ต้องการลบข้อมูลนี้หรือไม่?",
                showCancelButton: true,
                confirmButtonText: "ลบ",
                cancelButtonText: "ยกเลิก",
                confirmButtonColor: "#e3342f",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url + "/delete/" + id;
                }
            });
        };
    </script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style=" background-image: url({{ asset('image/logo-text.png') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Hello {{ Auth::user()->username }}</h1>
                    <p class="text-white mt-0 mb-5">Welcome to the back shop at Fahsai Grocery.
                        Here you can edit the product information and the system of the shop.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('image/owner.png') }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">♥</a>
                            <a href="#" class="btn btn-sm btn-default float-right">♥</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="text-center mt-md-5">
                                    <h3>
                                        {{ Auth::user()->username }}
                                    </h3>
                                    <div class="h5 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>- Admin Fahsai store -
                                    </div>
                                </div>
                                <div class="card-profile-stats d-flex justify-content-center ">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">สินค้ายอดนิยมที่เพิ่ม</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">สินค้าที่เพิ่ม</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">ประเภทสินค้าที่เพิ่ม</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" id="input-username"
                                                class="form-control form-control-alternative" placeholder="Username"
                                                value="{{ Auth::user()->username }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email address</label>
                                            <input type="email" id="input-email"
                                                class="form-control form-control-alternative" placeholder="Email address"
                                                value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Phone</label>
                                            <input type="text" id="input-first-name"
                                                class="form-control form-control-alternative" placeholder="Phone"
                                                value="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <a href="#">Show more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Account</h3>
                            </div>
                            {{-- <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                            </div> --}}
                        </div>
                    </div>
                    {{-- /////////////////////////// --}}
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush ">
                            <thead class="thead-light ">
                                <tr></tr>
                                <th scope="col">Username</th>
                                <th scope="col">Status</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">เเก้ไขสินค้า</th>
                                <th scope="col">ลบข้อมูล</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user01)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <span
                                                        class="mb-0 text-sm">{{ $users->firstitem() + $loop->index }}</span>
                                                </a>
                                                <div>
                                                    <h2 class="btn btn-secondary">
                                                        {{ $user01->username }}
                                                    </h2>

                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            @if ($user01->type == 1)
                                                <h2 class="btn btn-success">
                                                    Admin
                                                </h2>
                                            @elseif($user01->type == 0)
                                                <h2 class="btn btn-primary">
                                                    User
                                                </h2>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h2 class="btn btn-neutral">
                                                    {{ $user01->email }}
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h2 class="btn btn-neutral">
                                                    <green style="color: #2dce89;">{{ $user01->phone }}</green>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"></div>
                                            @if ($user01->id == auth()->user()->id || $user01->type == 0)
                                                <button class="media-body mb-0 text-sm btn btn-block btn-warning"
                                                    data-toggle="modal" data-target="#modal-form"
                                                    onclick="useredit('{{ $user01->id }}','{{ $user01->email }}','{{ $user01->phone }}')">แก้ไข</button>
                                            @else
                                                <a class="btn btn-default">ไม่สามารถแก้ไข</a>
                                            @endif
                    </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">

                            @if ($user01->id == auth()->user()->id || $user01->type == 0)
                                <button onclick="deleteConfirm('{{ $user01->id }}','profile')"
                                    class="btn btn-danger">ลบข้อมูล</button>

                            @else
                                <a class="btn btn-default">ลบข้อมูล</a>
                            @endif

                        </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $users->links() }}
                        </ul>
                    </nav>
                </div>
                {{-- /////////////////////////// --}}
            </div>
        </div>
    </div>
    </div>
    <footer class="footer pt-0"></footer>
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <div class="card border-0 mb-0" style="background-color: #D9EDEE !important;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <center><img src="{{ asset('admin/assets/img/brand/Logo-store.png') }}"
                                    style="max-width:15vmin;" alt="..."></center>
                            <div class="text-center text-muted mb-4 mt-3">
                                <strong>Edit Profile</strong>
                            </div>
                            {{ csrf_field() }}
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="gmail" type="text" class="form-control" name="gmail" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <input id="phone" type="text" class="form-control" name="phone" value="">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary my-4" onclick="submit()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
