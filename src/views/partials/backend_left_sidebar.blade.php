<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      @include('partials.backend_sidebar_left_searchform')
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        @component('components.backend.left_sidebar_header')
          HEADS
        @endcomponent
        <!-- Optionally, you can add icons to the links -->
        @component('components.backend.left_sidebar_basic_link')
          @slot('link')
            http://www.weather.com
          @endslot
          @slot('icon')
            fa fa-link
          @endslot
          My FaceBook
        @endcomponent
        @component('components.backend.left_sidebar_basic_link')
          @slot('link')
            http://www.weather.com
          @endslot
          @slot('icon')
            fa fa-link
          @endslot
          Another Link
        @endcomponent
        @component('components.backend.left_sidebar_treeview_link')
          @slot('icon')
            fa fa-facebook
          @endslot
          @slot('dropdownLinks')
           <li><a href="#">gah</a></li>
           <li><a href="#">fah!</a></li>
          @endslot
          My Dropdowns
        @endcomponent
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>