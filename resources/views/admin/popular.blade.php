@extends('admin.index')

@section('content')
    <!--   sweetalert2  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
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
                title: 'บันทึกข้อมูลเรียบร้อย'
            })
        </script>
    @endif
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
    <!--   End sweetalert2  -->
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <a href="popular/add" class="btn btn-success " style="float:right;">เพิ่ม</a>
                        <h2 class="mb-0 ">Popular Product (สินค้ายอดนิยม)</h3>
                    </div>
                    @if ($popular_product->count() > 0)
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ชื่อสินค้า</th>
                                    <th scope="col">ราคา</th>
                                    <th scope="col">ประเภท</th>
                                    <th scope="col">รูปสินค้า</th>
                                    <th scope="col">เพิ่มข้อมูลโดย</th>
                                    <th scope="col">เเก้ไขสินค้า</th>
                                    <th scope="col">ลบข้อมูล</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody> 
                              @foreach ($popular_product as $popular007)
                              <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <span class="mb-0 text-sm">{{ $popular_product->firstitem() + $loop->index }}</span>
                                        </a>
                                        <div class="media-body">
                                            <h2 class="btn btn-secondary">                                               
                                                <span class="mb-0 text-sm">{{ $popular007->popular }}</span>                                               
                                            </h2>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <h2 class="btn btn-secondary">
                                        <green style="color: #2dce89;">฿</green> {{ number_format($popular007->price) }}
                                    </h2>
                                </td>
                                <td>
                                    <h2 class="btn btn-secondary">                                               
                                        {{ $popular007->category->type_product }}                                             
                                    </h2>
                                </td>      
                                <td>
                                    <div>
                                        <a href="#" class=" avatar-sm" data-toggle="tooltip" data-original-title="{{ $popular007->popular }}">
                                            <img alt="" style="width: 7rem; background-color: #8f5c63;
                                            display: inline-flex;
                                            align-items: center; border-radius: 10% !important" src="{{ asset('admin/Popular_images/' . $popular007->image) }}" class="rounded-circle">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h2 class="btn btn-default">{{ $popular007->user->username }}</h2>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('/admin/popular/edit/'.$popular007->id_popular)}}" class="btn btn-warning">แก้ไข</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('/admin/popular/delete/'.$popular007->id_popular)}}" class="btn btn-danger">ลบข้อมูล</a>
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
                                {{$popular_product->links()}}
                            </ul>
                        </nav>
                    </div>
                    @else 
                    <div class="container-fluid">
                      <div class="alert alert-danger" role="alert">
                        <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                        <span class="alert-text"><strong>ไม่มีข้อมูลของสินค้า!</strong> </span>
                    </div>
                    </div>                                        
                    @endif 
                    
                </div>
            </div>
        </div>
        </div>
        <footer class="footer pt-0"></footer>
    @endsection
