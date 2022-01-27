        <!-- Navigation -->
        <ul class="navbar-nav">
            <li class="nav-item  {{ (request()->is('admin/dashboard*')) ? 'active' : '' }} ">
              <a class="nav-link  {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}" href="{{url('/admin/dashboard')}}">
                <i class="ni ni-chart-bar-32 text-primary"></i> Dashboard
              </a>
            </li>
            {{-- <li class="nav-item {{ (request()->is('admin/header_edit*')) ? 'active' : '' }}">
              <a class="nav-link {{ (request()->is('admin/header_edit*')) ? 'active' : '' }}" href="/admin/header_edit">
                <i class="ni ni-shop text-red"></i> Header Edit
              </a>
            </li> --}}
            <!-- <li class="nav-item">
              <a class="nav-link " href="./examples/home_edit.html">
                <i class="ni ni-cart text-warning"></i> Home Edit
              </a>
            </li> -->
            <li class="nav-item {{ (request()->is('admin/popular*')) ? 'active' : '' }}">
              <a class="nav-link {{ (request()->is('admin/popular*')) ? 'active' : '' }}" href="/admin/popular">
                <i class="ni ni-basket text-red"></i> Popular Product <br> (สินค้ายอดนิยม)
              </a>
            </li>
            <li class="nav-item {{ (request()->is('admin/product*')) ? 'active' : '' }}">
              <a class="nav-link {{ (request()->is('admin/product*')) ? 'active' : '' }}" href="/admin/product">
                <i class="ni ni-basket text-red"></i> Product <br> (สินค้า)
              </a>
            </li>
            <li class="nav-item {{ (request()->is('admin/type-product*')) ? 'active' : '' }}">
              <a class="nav-link {{ (request()->is('admin/type-product*')) ? 'active' : '' }}" href="/admin/type-product">
                <i class="ni ni-bullet-list-67 text-blue"></i> Type Product <br> (ประเภทของสินค้า)
              </a>
            </li>
            {{-- <li class="nav-item {{ (request()->is('admin/drive_thru*')) ? 'active' : '' }}">
              <a class="nav-link {{ (request()->is('admin/drive_thru*')) ? 'active' : '' }}" href="/admin/drive_thru">
                <i class="ni ni-delivery-fast text-orange"></i> Drive Thru
              </a>
            </li> --}}
            <li class="nav-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
              <a class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}" href="/admin/profile">
                <i class="ni ni-single-02 text-yellow"></i> User Profile
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="./examples/contact.html">
                <i class="ni ni-square-pin text-success"></i> Contact <br> (การติดต่อ)
              </a>
            </li> -->
          </ul>