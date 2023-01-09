<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ request()->is('dashboard') ? '' : 'collapsed' }}" href="{{route('dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link {{ request()->is('admin/*') ? '' : 'collapsed' }}" data-bs-target="#admin-nav" data-bs-toggle="collapse" >
        <i class="bi bi-gear"></i><span>Admin Rights</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="admin-nav" class="nav-content {{ request()->is('admin/users') ? '' : 'collapse' }}" data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('show_users_list')}}" class="{{ request()->is('admin/users') ? 'active' : ''}}">
            <i class="bi bi-record-circle-fill"></i><span>Users List</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ request()->is('site_setting/*') ? '' : 'collapsed' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" >
        <i class="bi bi-gear"></i><span>Website Settings</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content {{ request()->is('site_setting/setup') ? '' : 'collapse' }}" data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('setup')}}" class="{{ request()->is('site_setting/setup') ? 'active' : ''}}">
            <i class="bi bi-record-circle-fill"></i><span>Company Details</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/')}}">
          <i class="bi bi-stickies"></i>
          <span>View Website</span>
        </a>
      </li>
  </ul>

</aside><!-- End Sidebar-->