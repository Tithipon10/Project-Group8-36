@extends('admin.index')

@section('content')
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">  
                                    
          <h2 class="mb-0">ระบบ Drive-Thru</h2> 
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="text-center">ชื่อลูกค้า</th>
                <th scope="col" >สินค้า</th>
                <th scope="col" >จำนวนสินค้า</th>
                <th scope="col" >ราคารวม</th>
                <th scope="col" >วันที่สั่งซื้อ</th>
                <th scope="col" >เวลาที่จะมารับสินค้า</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" ></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/team-1-800x800.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Argon Design System</span>
                    </div>
                  </div>
                </th>
                <td>
                  <span class="badge badge-dot mr-4">
                    Snack , Milk  <br>
                  </span>
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    100 <br>
                  </span>
                </td>
                <td>
                  $2,500 USD
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                
                <td>             
                  <div class="d-flex align-items-center">
                    <span class="badge badge-dot mr-4" style="display: block; margin-left: auto; margin-right: auto;">
                      <i class="bg-warning"></i> pending
                    </span>
                    <a href="" class="btn btn-success">confirm</a>
                  </div>
                </td>
                
                
              </tr>
             
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/team-2-800x800.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Angular Now UI Kit PRO</span>
                    </div>
                  </div>
                </th>
                
                <td>
                  <span class="badge badge-dot mr-4">
                   Mama <br>
                  </span>
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    10 <br>
                  </span>
                </td>
                <td>
                  $1,800 USD
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="badge badge-dot" style="display: block; margin-left: auto; margin-right: auto;">
                      <i class="bg-success"></i> completed
                    </span>
                    <a href="" class="btn btn-success">confirm</a> 
                  </div>
                </td>
                
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/team-3-800x800.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Black Dashboard</span>
                    </div>
                  </div>
                </th>
                
                <td>
                  <span class="badge badge-dot mr-4">
                    Lay  <br>
                  </span>
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    200 <br>
                  </span>
                </td>
                <td>
                  $3,150 USD
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="badge badge-dot mr-4" style="display: block; margin-left: auto; margin-right: auto;">
                      <i class="bg-danger"></i> delayed
                    </span>
                    <a href="" class="btn btn-success">confirm</a> 
                  </div>
                </td>
               
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{asset('admin/assets/img/theme/team-4-800x800.jpg')}}">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">React Material Dashboard</span>
                    </div>
                  </div>
                </th>
                
                <td>
                  <span class="badge badge-dot mr-4">
                    Cola  <br>
                  </span>
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    1000 <br>
                  </span>
                </td>
                <td>
                  $4,400 USD
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                <td>
                  <input type="datetime-local">
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="badge badge-dot" style="display: block; margin-left: auto; margin-right: auto;">
                      <i class="bg-info"></i> on schedule
                    </span>
                    <a href="" class="btn btn-success">confirm</a> 
                  </div>
                </td>
              
              </tr>
             
            </tbody>
          </table>
        </div>
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
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