<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      @component('components.backend.content_box')
        @slot('title', 'My Title')
        @slot('footer', 'Copyright 2016')
        <p>This is some of my content</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <form>
          @component('components.backend.ck_edit')

          @endcomponent
          @component('components.backend.form_component')
            @slot('label','My Label')
            @slot('formId', 'id1')
            @slot('placeholder', 'Enter Placeholder')

          @endcomponent
          @component('components.backend.button')
            @slot('name','Submit')
          @endcomponent
          @component('components.backend.checkbox')
            Like Cheese?
          @endcomponent
        </form>
      @endcomponent
      @component('components.backend.callout')
        @slot('calloutType', 'danger')
        <p>This is a callout!</p>
      @endcomponent

    </section>
    <!-- /.content -->
  </div>