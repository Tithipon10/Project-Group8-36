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
    @if (session('error'))
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
                icon: 'error',
                title: 'ไม่สามารถลบประเภทสินค้าได้เนื่องจากมีสินค้าอยู่'
            })
        </script>
    @endif
    @if (session('type_product'))
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
                icon: 'warning',
                title: 'ต้องมีประเภทสินค้าอย่างน้อย 1 ประเภท'
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
                        <a href="type-product/add" class="btn btn-success " style="float:right;">เพิ่ม</a>
                        <h2 class="mb-0">Type product (ประเภทของสินค้า)</h3>
                    </div>
                    @if ($type_product->count() > 0)
                    <div class="table-responsive">
                      <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                              <tr>
                                  <th scope="col">ชนิดของสินค้า</th>
                                  <th scope="col">จำนวนของสินค้า</th>
                                  <th scope="col">เพิ่มข้อมูลโดย</th>
                                  <th scope="col">เเก้ไขสินค้า</th>
                                  <th scope="col">ลบข้อมูล</th>
                                  <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($type_product as $type_product007)
                                  <tr>
                                      <th scope="row">
                                          <div class="media align-items-center">
                                              <a href="#" class="avatar rounded-circle mr-3">
                                                
                                                <span class="mb-0 text-sm">{{ $type_product->firstitem() + $loop->index }}</span>
                                                
                                              </a>
                                              <div class="media-body">
                                                <h2 class="btn btn-secondary">                                               
                                                    <span class="mb-0 text-sm">{{ $type_product007->type_product }}</span>                                               
                                                </h2>
                                              </div>
                                          </div>
                                      </th>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <h2 class="btn btn-neutral">
                                                  {{ $type_product007->product->count() + $type_product007->popular->count() }}
                                              </h2>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <h2 class="btn btn-default">{{ $type_product007->user->username }}</h2>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <a href="{{ url('/admin/type-product/edit/' . $type_product007->id_type_product) }}"
                                                  class="btn btn-warning">แก้ไข</a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <a href="{{ url('/admin/type-product/delete/' . $type_product007->id_type_product) }}"
                                                  class="btn btn-danger">ลบข้อมูล</a>
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
                                {{$type_product->links()}}
                            </ul>
                        </nav>
                    </div>
                    @else 
                    <div class="container-fluid">
                      <div class="alert alert-danger" role="alert">
                        <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                        <span class="alert-text"><strong>ไม่มีข้อมูลประเภทสินค้า!</strong> </span>
                    </div>
                    </div>                                        
                    @endif  
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-0"></footer>
    @endsection
