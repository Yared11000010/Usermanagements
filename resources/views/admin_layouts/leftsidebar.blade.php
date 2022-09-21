  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success elevation-4  ">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold text-decoration-none ">BYT  <span >E-Commerce</span> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Abraham Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open }} ">
            <a href="#" class="nav-link active }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>         
            <ul class="nav nav-treeview pb-4">
              <li class="nav-item">
                <a href="" class="nav-link  active}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-Commerce</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ request()->is('adduser')?'menu-open':'' }}{{ request()->is('alluser')?'menu-open':'' }}">
            <a href="#" class="nav-link mt-1 mb-1 {{ request()->is('adduser')? 'active':'' }}{{ request()->is('alluser')?'active':'' }}">
              <i class="nav-icon fa  fa-users "></i>
              <p>
                User Managements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addusers') }}" class="nav-link  {{ request()->is('adduser')? 'active':'' }}">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('allusers') }}" class="nav-link {{ request()->is('alluser')?'active':'' }}">
                  <i class="fa fa-users nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item has-treeview pb-1 {{ request()->is('addcategory')?'menu-open':'' }}{{ request()->is('allcategory')?'menu-open':'' }} ">
            <a href="#" class="nav-link {{ request()->is('addcategory')? 'active':'' }}{{ request()->is('allcategory')?'active':'' }} ">
              <i class="nav-icon fa fa-window-restore"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('addcategory')? 'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('allcategory')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview pb-1 {{ request()->is('addslider')?'menu-open':'' }}{{ request()->is('allslider')?'menu-open':'' }} ">
            <a href="#" class="nav-link {{ request()->is('addslider')? 'active':'' }}{{ request()->is('allslider')?'active':'' }} ">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('addslider')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('allslider')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview pb-1 {{ request()->is('addproduct')?'menu-open':'' }}{{ request()->is('allproduct')?'menu-open':'' }}">
            <a href="#" class="nav-link {{ request()->is('addproduct')? 'active':'' }}{{ request()->is('allproduct')?'active':'' }}">
              <i class="nav-icon fa fa-shopping-bag"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('addproduct')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add product</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('allproduct')?'active':'' }}">
                  <i class="nav-icon fa fa-shopping-bag"></i>
                  <p>Products</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview  pb-1{{ request()->is('orders')?'menu-open':'' }}">
            <a href="#" class="nav-link {{ request()->is('orders')? 'active':'' }}">
              <i class="nav-icon fa fa-clipboard"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link {{ request()->is('orders')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <li class="nav-item">
             <p><hr></p>
            </li>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link ">
              <i class="nav-icon fa fa-cog "></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
{{-- start of main content --}}