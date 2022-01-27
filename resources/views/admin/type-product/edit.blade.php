@extends('admin.index')

@section('content')
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h2 class="mb-0">Edit Type Product (แก้ไขประเภทของสินค้า)</h2>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush ">
            <thead class="thead-light">
              <tr>

                <th scope="col" class="col-sm-6 ">แก้ไขประเภทของสินค้า</th>
                <th scope="col" class="col-sm-6 text-center"></th>

              </tr>
            </thead>
            <tbody>   
              <form action="{{url('/admin/type-product/Update/'.$edit->id_type_product)}}"method="post">
                {{csrf_field()}} 
                  <th scope="col">                
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Type Product</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="type_product" value="{{$edit->type_product}}">
                        @error('type_product')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                      <button type="summit" name="submit" class="btn btn-success "><a>บันทึกข้อมูล</a></button>
                  </th>
              </form>
            </tbody>
        </table>
        </div>
        
      </div>
    </div>
  </div>
  @endsection