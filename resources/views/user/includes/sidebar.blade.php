<!-- Brand Logo -->

<a href="#" class="brand-link">
      <img src="{{asset('assets/dist/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>MLASA COLLEGE</b></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div> -->
      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home

              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href=" {{route('person')}}" class="nav-link">
              <i class="fa fa-address-card"></i>
              <p>
              Personal Information 
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('person')}}" class="nav-link">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-edit"></i>
                  <p>Add details</p>
                </a>
              </li>
              </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="fas fa-angle-left right"></i>
              <p>
                Accademic Result
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('four.index')}}" class="nav-link">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-edit"></i>
                  <p>Form Result</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('formSix')}}" class="nav-link">
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-edit"></i>
                  <p>Six Result</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-edit"></i>
                  <p>Diploma</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="{{route('apply.index')}}" class="nav-link">
              <i class="fa fa-address-card"></i>
              <p>
                Apply Now
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class=""></i>
              <p>
                Review and Submission
              </p>
            </a>
          </li>
<li class="nav-item has-treeview">
            <a href="{{route('cpass')}}" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                change Password
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
             </form>
          </li>


        </ul>
      </nav>

    </div>
    <!-- /.sidebar -->
