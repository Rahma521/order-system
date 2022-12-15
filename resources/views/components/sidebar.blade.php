<!-- Sidebar Nav -->
<aside id="sidebar" class="js-custom-scroll side-nav">
    <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
        <!-- Title -->
        <li class="sidebar-heading h6">Dashboard</li>
        <!-- End Title -->

        <!-- Dashboard -->
        <li
            class="side-nav-menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="side-nav-menu-link media align-items-center" href="{{ route('dashboard') }}">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-dashboard"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard -->

        <!-- Title -->
        <li class="sidebar-heading h6">Users</li>
        <!-- End Title -->

        <!-- Roles -->
        @can('Manage-role')
        <li class="side-nav-menu-item side-nav-has-menu side-nav-opened">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subRoles">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Roles</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subRoles" class="side-nav-menu side-nav-menu-second-level mb-0" style="display: block;">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('roles.index') }}">All Roles</a>
                    </li>
                    
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('roles.create') }}">Create New Role</a>
                    </li>
                   
                </ul>
          </li>
          @endcan
<!-- End Roles -->

<!-- Users -->
        
@can('Manage-user')
    <li class="side-nav-menu-item side-nav-has-menu side-nav-opened">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Users</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0" style="display: block;">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('users.index') }}">All Users</a>
                    </li>
                    
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('users.create') }}">Create New User</a>
                    </li>
                   
                </ul>
                
    </li>
    @endcan
    <!-- End Users: subUsers -->
    <!-- End Users -->

    <!-- Orders -->
    @can('Manage-order')
<li class="side-nav-menu-item side-nav-has-menu side-nav-opened">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subOrder">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Orders</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subOrder" class="side-nav-menu side-nav-menu-second-level mb-0" style="display: block;">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('orders.index') }}">All Orders</a>
                    </li>
                    
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('orders.create') }}">Create New Order</a>
                    </li>
                   
                </ul>
                
    </li>
    @endcan
<!-- End Orders -->

 <!-- Orders -->
 @can('Manage-service')
<li class="side-nav-menu-item side-nav-has-menu side-nav-opened">
                <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subService">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Services</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subService" class="side-nav-menu side-nav-menu-second-level mb-0" style="display: block;">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('services.index') }}">All Services</a>
                    </li>
                    @can('service-create')
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="{{ route('services.create') }}">Create New Service</a>
                    </li>
                    @endcan
                   
                </ul>
                
    </li>
    @endcan
<!-- End Orders -->
</aside>

<!-- End Sidebar Nav -->
