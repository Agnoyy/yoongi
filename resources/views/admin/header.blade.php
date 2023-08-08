<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="{{ url("#") }}" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <!-- Messages Dropdown Menu -->
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="{{ url("#") }}">
        <i class="far fa-user fa-spin"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href=# class="dropdown-item">
          <i class="fas fa-user fa-spin mr-2"></i> @if(Auth::check())
           <span class="hidden-xs">{{ auth::user()->name}}</span>
           @endif
        </a>
        <div class="dropdown-divider"></div>
        <a href=# class="dropdown-item">
          <i class="fas fa-envelope fa-spin mr-2"></i> @if(Auth::check())
           <span class="hidden-xs">{{ auth::user()->email}}</span>
           @endif
        </a>
        <div class="dropdown-divider"></div>
        <form align="center" action="{{ route('logout') }}" method="post">
          @csrf
        <button type="submit" class="btn btn-block btn-danger btn-sm">Logout</button>
        </form>
      </div>
    </li>
  </ul>
</nav>