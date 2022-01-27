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
          <table class="table align-items-center table-flush ">
            <thead class="thead-light">
              <tr>

                <th scope="col" class="col-sm-3 ">simple image</th>
                <th scope="col" class="col-sm-3 ">Background color</th>
                <th scope="col" class="col-sm-3 ">Status</th>
                <th scope="col" class="col-sm-3 ">Delete</th>

              </tr>
            </thead>
            <tbody >
                
              <tr>
                <th scope="row" >
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-4">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/bootstrap.jpg')}}">
                    </a>
                    
                  </div>
                </th>
                <th scope="row" >
                  <div class="media-body">
                    <div class="form-group" style="padding-right: 50%;">
                      <input class="form-control" type="color" value="#7a00fc" id="example-color-input">
                  </div>
                  </div>
                </th>
                
                
                
                <td>
                  <div class="d-flex align-items-center">
                    <h3>Show &nbsp;</h3>
                    <label class="custom-toggle">
                      <input type="checkbox" checked>
                      
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                  </div>
                  
                </td>
              </tr>
             
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle ">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/angular.jpg')}}">
                    </a>
                    
                  </div>
                </th>
                <th scope="row" >
                  <div class="media-body">
                    <div class="form-group" style="padding-right: 50%;">
                      <input class="form-control" type="color" value="#ff0000" id="example-color-input">
                  </div>
                  </div>
                </th>
               
                <td>
                  <div class="d-flex align-items-center">
                    <h3>Show &nbsp;</h3>
                    <label class="custom-toggle">
                      <input type="checkbox" checked>
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle ">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/sketch.jpg')}}">
                    </a>
                  </div>
                </th>
                <th scope="row" >
                  <div class="media-body">
                    <div class="form-group" style="padding-right: 50%;">
                      <input class="form-control" type="color" value="#e9a012" id="example-color-input">
                  </div>
                  </div>
                </th>
               
                <td>
                  <div class="d-flex align-items-center">
                    <h3>Show &nbsp;</h3>
                    <label class="custom-toggle">
                      <input type="checkbox" checked>
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle ">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/react.jpg')}}">
                    </a>
                    
                  </div>
                </th>
                <th scope="row" >
                  <div class="media-body">
                    <div class="form-group" style="padding-right: 50%;">
                      <input class="form-control" type="color" value="#18bde5" id="example-color-input">
                  </div>
                  </div>
                </th>
               
                <td>
                  <div class="d-flex align-items-center">
                    <h3>Show &nbsp;</h3>
                    <label class="custom-toggle">
                      <input type="checkbox" checked>
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                  </label>
                  </div>
                </td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="" class="btn btn-danger">ลบข้อมูล</a>  
                </div>
              </td>
              </tr>
                               

            </tbody>
        </table>
        </div>
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item ">
                <a class="page-link" href="header_edit" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="header_edit">1</a>
              </li>
              <li class="page-item  active">
                <a class="page-link" href="header_edit_v2">2 <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="page-item disabled">
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