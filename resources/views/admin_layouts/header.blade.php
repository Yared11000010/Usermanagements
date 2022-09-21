  @notifyCss
 <nav class="main-header navbar navbar-expand 0 navbar-light  bg-white border-bottom p-2">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link font-weight-bold">Dashboard</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link " href="https://markets.smartersvision.com/carts"><i class="fa fa-shopping-cart"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="https://markets.smartersvision.com/notifications"><i class="fa fa-bell"></i></a>
    </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
        
      </li>
     
    </ul>


    <div class="bg-white p-2  dropdown">
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
      <a class="bg-white " href="#" role="button" data-toggle="dropdown" aria-expanded="false">
        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
      </a>
    @else
      <a href="">{{ Auth::user()->name }}</a>
    @endif
      <x:notify-messages />
      <div class="dropdown-menu">
        <a class="dropdown-item disabled dropdown-header" href="#">Manage Account</a>

        <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
        <hr>
        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
           <a href="{{ route('api-tokens.index') }}"> {{ __('API Tokens') }}</a>
        @endif
        <a class="dropdown-item" href="">
          
          Logout
        </a>
      </div>
    </div>
     </div>
  </nav>
  @notifyJs
