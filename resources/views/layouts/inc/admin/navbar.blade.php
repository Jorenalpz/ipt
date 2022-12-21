<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-success" >
    <div class="navbar-brand-wrapper d-flex justify-content-center border-0 shadow-sm bg-success">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand brand-logo text-dark" href="{{url('/admin/dashboard')}}">Shoes</a>
        <a class="navbar-brand brand-logo-mini"><img src={{url('/images/logo-somosot.png')}} alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-success shadow-lg">
      <ul class="navbar-nav navbar-nav-right">
       
      {{-- <li class="nav-item border-0">
        <a class="nav-item nav-link " href="{{url('/home/appoint')}}">
            <i class="bi bi-calendar3"></i>
          <span class="menu-title text-dark ms-4">Appointments</span>
        </a>
      </li> --}}
      @role('admin')
      <li class="nav-item border-0">
        <a class="nav-link" href="{{url('/admin/user-view')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Manage Users</span>
        </a>
      </li>
      {{-- <li class="nav-item border-0">
        <a class="nav-link" href="{{ route('admin.roles.index')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Manage Roles</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ route('admin.permissions.index')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Manage Permission</span>
        </a>
      </li> --}}
      @endrole
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/records')}}">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title text-dark">Shoes</span>
        </a>
      </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <img src={{asset("/admin/images/faces/face5.jpg")}} alt="profile"/>
            <span class="nav-profile-name text-dark">{{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="mdi mdi-settings text-primary"></i>
              Settings
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             <i class="mdi mdi-logout text-primary"></i>{{ __('Logout') }}
             </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
   
    
  </nav>
