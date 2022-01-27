@extends('admin.index')

@section('content')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h2 class="mb-0">Add Type Product (เพิ่มประเภทของสินค้า)</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush ">
                            <thead class="thead-light">
                                <tr>

                                    <th scope="col" class="col-sm-6 ">เพิ่มประเภทของสินค้า</th>
                                    <th scope="col" class="col-sm-6 text-center"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{ route('create') }}" method="post">
                                    {{ csrf_field() }}
                                    <th scope="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Type Product</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                name="type_product" placeholder="**เช่น เครื่องดื่ม,ขนม**">
                                            @error('type_product')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button type="summit" name="submit"
                                            class="btn btn-success "><a>บันทึกข้อมูล</a></button>
                                    </th>
                                </form>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        <!-- &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> -->
                    </div>
                </div>
                <div class="col-xl-6">
                    <!-- <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                          <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                          </li>
                          <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                          </li>
                          <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                          </li> -->
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
