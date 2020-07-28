
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('lte/dist/img/mg.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mision X</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{asset('lte/dist/img/user2-160x160.jpg')}}"  
          class="img-circle elevation-2" alt="User Image">--}}
        </div>
        <div class="info">
        {{-- <a href="#" class="d-block">{{auth()->user()->name}}::{{auth()->user()->role}}</a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
         role="menu" data-accordion="false">
         <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="fa fa-graduation-cap nav-icon"></i>
            <p>Home</p>
          </a>
         </li>
         <li class="nav-item">
          <a href="https://g-leads.disprz.com/" class="nav-link">
            <i class="fa fa-graduation-cap nav-icon"></i>
            <p>G-Leads</p>
          </a>
         </li>
          <li class="nav-item">
            <a href="/ticket" class="nav-link">
              <i class="fa fa-medkit nav-icon"></i>
              <p>Ticket</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link">
              <i class="fa fa-shopping-cart nav-icon"></i>
              <p>Sign In</p>
            </a>
          </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- <li class="nav-item">
                <a href="{!!route('dashboard')!!}" class="nav-link {!! Request::is('dashboard') ? 'active' : '' !!}">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Home</p>
                </a>
              </li> --}}
              {{-- @if (in_array(auth()->user()->role,['ADM','USR']))                  
                <li class="nav-item has-treeview {!! Request::is(['blank','admin/*',
                  'admin/param*']) ? 'menu-open' : '' !!}">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-bars"></i>
                    <p> Admin<i class="right fas fa-angle-left"></i></p>
                  </a>
                  <ul class="nav nav-treeview">


                  </ul>
                </li>
              @endif --}}

            {{-- Training --}}
            {{-- @if (in_array(auth()->user()->role,['ADM'])) 
              <li class="nav-item has-treeview {!! Request::is(['training','training/*']) ? 'menu-open' : '' !!}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                    Training
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{!!route('training')!!}" class="nav-link {!! Request::is('training/training') ? 'active' : '' !!}">
                      <i class="fa fa-cube nav-icon"></i>
                      <p>Input Training</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{!!route('traininglist')!!}" class="nav-link {!! Request::is('training/traininglist') ? 'active' : '' !!}">
                      <i class="fa fa-cube nav-icon"></i>
                      <p>Peserta Training</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{!!route('blank')!!}" class="nav-link {!! Request::is('blank') ? 'active' : '' !!}">
                      <i class="fa fa-cube nav-icon"></i>
                      <p>Survey</p>
                    </a>
                  </li>
                </ul>
              </li>
            @endif --}}

            {{-- Program Kerja--}}
            {{-- @if (in_array(auth()->user()->role,['ADM','USR'])) 
              <li class="nav-item has-treeview {!! Request::is(['proker','job/proker*']) ? 'menu-open' : '' !!}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-list-alt"></i>
                  <p>
                    Program Kerja
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if (in_array(auth()->user()->role,['ADM','USR'])) 
                    <li class="nav-item">
                      <a href="{!!route('proker')!!}" class="nav-link {!! Request::is('job/proker*') ? 'active' : '' !!}">
                        <i class="fa fa-briefcase nav-icon"></i>
                        <p>Proker</p>
                      </a>
                    </li>
                    @endif
                  </ul>
              </li>
            @endif --}}
          
            <li class="nav-item">
              <a href="/logout" class="nav-link">
                <i class="fa fa-window-close nav-icon"></i>
                <p>Logout</p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>