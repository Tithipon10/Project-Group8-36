@extends('admin.index')

@section('content')
<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-header border-0">
            <h2 class="mb-0">Header Edit</h2>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>

                  <th scope="col" class="col-sm-6 text-center">simple image</th>
                  <th scope="col" class="col-sm-6">เมนูสำหรับเลือกรูป</th>

                </tr>
              </thead>
              <tbody>
                
                
                  <th scope="row">
                    <img src="{{asset('admin/assets/img/brand/Logo-store.png')}}" alt="" style="display: block; margin-left: auto; margin-right: auto;"> 
                    <th scope="col">
                      <br>
                      <br>
                    <h3>Logo image</h3>
                    <div class="custom-file col-md-4" style="padding-right: 50%;">
                      <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                      <label class="custom-file-label" for="customFileLang">Select file</label>
                    </div>
                      <br>
                      <br>
                      <br>
                      <br>
                    <h3>Background image</h3>
                    <div class="form-group" style="padding-right: 50%;">
                      <input class="form-control" type="color" value="#5e72e4" id="example-color-input">
                  </div>
                      <br>
                      <br>
                      
                      
                      <a href="" class="btn btn-success ">บันทึกข้อมูล</a>      
                    </th>                                                                           
                  </th>
                

              </tbody>
            </table>
          </div>
          <div class="card-footer py-4">
            <nav aria-label="...">
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="header_edit" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="header_edit">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="header_edit_v2">2 <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="page-item">
                  <a class="page-link" href="header_edit_v2">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    @endsection