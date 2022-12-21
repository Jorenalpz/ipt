<nav class="sidebar sidebar-offcanvas nav-pills sidebar-fill bg-info shadow-lg" id="sidebar" >
    <ul class="nav mt-4 text-dark">
      <li class="nav-item border-0">
        <a class="nav-link" href="{{url('/home')}}">
          <i class="mdi mdi-home menu-icon" style="color:white"></i>
          <span class="menu-title text-dark">Dashboard</span>
        </a>
      </li>
@role('admin')
      {{-- <li class="nav-item border-0">
        <a class="nav-item nav-link " href="{{url('/home/appoint')}}">
            <i class="bi bi-calendar3"></i>
          <span class="menu-title text-dark ms-4">Appointments</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item border-0">
        <a class="nav-link" href="{{url('/admin/user-view')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Manage Users</span>
        </a>
      </li> --}}
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ route('admin.roles.index')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Roles</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ route('admin.permissions.index')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Permission</span>
        </a>
      </li>

@endrole

      {{-- <li class="nav-item border-0">
        <a class="nav-link" href="pages/charts/chartjs.html">
            <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title text-dark">Profile</span>
        </a>
      </li> --}}
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/records')}}">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title text-dark">shoes</span>
        </a>
      </li>

      @role('admin')
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
      @endrole
    </ul>
  </nav>
