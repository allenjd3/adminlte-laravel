<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">{{substr(config('app.name'), 0, 3)}}</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{{config('app.name')}}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Tasks Menu -->
          @if(Auth::check())
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="@yield("image_uri","dist/img/user2-160x160.jpg")" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{Auth::user()->name}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="@yield("image_uri","dist/img/user2-160x160.jpg")" class="img-circle" alt="User Image">

                  <p>
                    {{Auth::user()->name}}

                    <small>Member since {{Auth::user()->created_at->format('M Y')}}</small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                  <a href="{{ url('/logout') }}" 
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" class="btn btn-default">
                        Signout
                  </a>
                   <form id="logout-form" 
                          action="{{ url('/logout') }}" 
                      method="POST" 
                      style="display: none;">
                                  {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
            </li>
          @endif
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>