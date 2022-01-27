@extends('admin.index')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h2 class="mb-0">Edit Product (แก้ไขสินค้า)</h2>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush ">
            <thead class="thead-light">
              <tr>

                <th scope="col" class="col-sm-6 text-center">แก้ไขสินค้า</th>
                <th scope="col" class="col-sm-6 "></th>


              </tr>
            </thead>
            <tbody>
              <form action="{{url('/admin/product/Update/'.$Edit_product->id_home)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <th scope="row" style="display: block; margin-left: auto; margin-right: auto;">
                      <img src="{{ asset('admin/Product_images/'.$Edit_product->image)}}" alt="" id="showImage" 
                          style="display: block; margin-left: auto; margin-right: auto; width:40%">
                      <br>
                      <h5 class="text-center">Select Image</h5>
                      <div class="custom-file col-md-4 "
                          style="display: block; margin-left: auto; margin-right: auto;">
                          <input type="file" class="custom-file-input" name="image" id="image" lang="en">
                          <label class="custom-file-label" for="image">Select file</label>
                          @error('image')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>

                  <th scope="col">
                      {{-- <div class="form-group">
                          <label for="exampleFormControlInput1">Type Product</label>
                          <input type="text" class="form-control" name="type_product"
                              id="exampleFormControlInput1" value="{{$Edit_product->type_product}}">
                          @error('type_product')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div> --}}
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Type Product</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="type_product">
                          <option value="{{$Edit_product->type_product}}">{{ $Edit_product->category->type_product }}</option>
                            @foreach ($products_type as $p_type)
                                <option value="{{ $p_type->id_type_product }}">{{ $p_type->type_product }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Product Name</label>
                          <input type="text" class="form-control" name="product"
                              id="exampleFormControlInput1" value="{{$Edit_product->product}}">
                          @error('product')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Price</label>
                          <input type="text" class="form-control" name="price"
                              id="exampleFormControlInput1" value="{{$Edit_product->price}}">
                          @error('price')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <button type="summit" class="btn btn-success ">บันทึกข้อมูล</button>
                  </th>
                  </th>
              </form>
          </tbody>
        </table>
        </div>      
      </div>
    </div>
  </div>
</div>
<script text="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>
@endsection