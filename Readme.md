# Super Simple AdminLTE package for quick AdminLTE backends. 

## Installation

requires Laravel 5.4

	composer require allenjd3/adminlte-laravel

Add the service provider to your config/app.php

    Allenjd3\Adminlte\AdminlteComponentProvider::class,

Publish the public assets (this has all the css and javascript files)

	php artisan vendor:publish --tag=public

## 1. Extend the backend

First you are going to want to extend the backend.

    @extends('jd3_lte::layouts.backend_app')

## 2. Insert sections

### Miscellaneous sections

These sections have default values that can be overidden.

	@section('image_uri','example.com') //add url for your user image here
	@section('main_footer','Copyright 1212') //this is the copyright area
	@section('right_footer','A right side footer') //This is the right footer area
	@section('profile_link','mylink.com') //this is the profile url in the admin dropdown
	@section('content_header', 'The Body') //this is the Header of the main content area
	@section('content_sub_header', 'Sub Header') //This is the sub header of the main content area

### Left Sidebar section

	@section('left-sidebar')

		//insert your links here.

	@endsection

The components that you can include in the sidebar are listed below the content area.

### The Main Content Area

    @section('content')

        //insert your content here.

    @endsection

Within the content section of the extended backend, you can use the following components.

## 3. Insert Components

### Button

    @component('jd3_lte::slots.button')
        @slot('name', 'Jim Allen') // This one is mandatory
        @slot('type', 'danger') // primary is default. Can also be warning or info
        //default slot is unused in this component
    @endcomponent

This will print the following

    <button type="submit" class="btn btn-{{$type or "primary"}}">{{$name}}</button>

### Callout

    @component('jd3_let::slots.callout')

    	@slot('calloutType', 'danger') // defaults to primary

    	This is where the body of the callout will be. 

    @endcomponent

This will print the following

	<div class="callout callout-{{$calloutType or "primary"}}">
		{{$slot}}
	</div>

### Checkbox

	@component('jd3_lte::slots.checkbox')
		@slot('name', 'check1') // This is mandatory
		This will be the text of the checkbox.

	@endcomponent

This will print the following

	<div class="checkbox">
		<label>
			<input type="checkbox" name="{{$name}}"> {{$slot}}
		</label>
	</div>

//Possible spot for CK edit component. Add when problems of adding id to js component are fixed.

### Content Box

	@component('jd3_lte::slots.content_box')
		@slot('title', 'My great box')
		@slot('footer', 'That was great wasn\'t it?') //This defaults to nothing

		//This is where the bulk of your content will go. This is a good wrapper for the rest of your components.

	@endcomponent

This will print the following

	<!-- Default box -->
	<div class="box">
	  <div class="box-header with-border">
	    <h3 class="box-title">{{$title}}</h3>

	    <div class="box-tools pull-right">
	      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
	        <i class="fa fa-minus"></i></button>
	      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
	        <i class="fa fa-times"></i></button>
	    </div>
	  </div>
	  <div class="box-body">
	    {{$slot}}
	  </div>
	  <!-- /.box-body -->
	  <div class="box-footer">
	    {{$footer or ""}}
	  </div>
	  <!-- /.box-footer-->
	</div>
	<!-- /.box -->

### Form Component

	@component('jd3_lte::slots.form_component')
		@slot('formId', 'form1') //mandatory
		@slot('type', 'email') //defaults to text
		@slot('placeholder','Your Email') //defaults to nothing
		@slot('value', 'mrmagoo.aol.net') //defaults to nothing
		//default slot is unused in this component
	@endcomponent

This will print the following

	<div class="form-group">
	  <label for="{{$formId}}">{{$label}}</label>
	  <input type="{{$type or "text"}}" class="form-control" id="{{$formId}}" placeholder="{{$placeholder or ""}}" value="{{$value or ""}}">
	</div>

Within the left-sidebar section of the extended backend, you can use the following components.

### Left Sidebar Basic Link

	@component('jd3_lte::slots.left_sidebar_basic_link')

		@slot('link', 'http://www.weather.com') // this is where your link will go
		@slot('icon', 'fa fa-link') // This is a favicon that you can add to the left of the link

		//This is where the Text of the link will be

	@endcomponent

This will print the following

	<li class="active">
		<a href="{{$link}}">
			<i class="{{$icon}}"></i> 
			<span>{{$slot}}</span>
		</a>
	</li>

### Left Sidebar Header

	@component('jd3_lte::slots.left_sidebar_header')

		//This is where the content of the header will go

	@endcomponent

This will print the following

	<li class="header">{{$slot}}</li>

### Left Sidebar Treeview

	@component('jd3_lte::slots.left_sidebar_treeview_link')
		@slot('icon', 'fa fa-link') //favicon class for icon
		@slot('dropdownLinks')
			<li><a href="#">These will </a></li>
			<li><a href="#">Drop Down </a></li>
		@endslot

		This is the link text.

	@endcomponent

This will print the following

	<li class="treeview">
	  <a href="#"><i class="{{$icon}}"></i> <span>{{$slot}}</span>
	    <span class="pull-right-container">
	      <i class="fa fa-angle-left pull-right"></i>
	    </span>
	  </a>
	  <ul class="treeview-menu">
	    {{$dropdownLinks}}
	  </ul>
	</li>

## Editing components and partials

You can always publish all assets with

	php artisan vendor:publish

but this may publish other files that you may not want. If you would like to make modifications to the way things are displayed you can publish all of the files and make changes or only change the files you need to change. The choice is up to you.  There are many publish options. here is a quick list-

	php artisan vendor:publish --tag=public
	php artisan vendor:publish --tag=layouts //the entire layouts folder
	php artisan vendor:publish --tag=slots //the entire slots folder
	php artisan vendor:publish --tag=left-sidebar //the left sidebar partial
	php artisan vendor:publish --tag=content //the content partial
	php artisan vendor:publish --tag=footer //the footer partial
	php artisan vendor:publish --tag=main-nav //the main nav partial
	php artisan vendor:publish --tag=scripts //the scripts partial
	php artisan vendor:publish --tag=searchform //the searchform partial
	php artisan vendor:publish --tag=right-sidebar //the right sidebar partial
	php artisan vendor:publish --tag=button //the button component
	php artisan vendor:publish --tag=callout //the callout component
	php artisan vendor:publish --tag=checkbox //the checkbox component
	php artisan vendor:publish --tag=ck-edit //the ck-edit component
	php artisan vendor:publish --tag=content-box //the content box component
	php artisan vendor:publish --tag=form-component //the form component component
	php artisan vendor:publish --tag=link //the link sidebar component
	php artisan vendor:publish --tag=treeview // the treeview sidebar component
	php artisan vendor:publish --tag=header-left //the header left sidebar component

## Quick template with defaults

Just copy and paste

	@extends('jd3_lte::layouts.backend_app')
	@section('image_uri','https://upload.wikimedia.org/wikipedia/commons/b/b1/James_Allen.jpg') 
	@section('main_footer','Copyright 1212') 
	@section('right_footer','A right side footer') 
	@section('profile_link','mylink.com') 
	@section('content_header', 'The Body') 
	@section('content_sub_header', 'Sub Header') 
	@section('content')
		<h1>This is some content</h1>
	@endsection
	@section('left-sidebar')
		<li><a href="#">My link</a></li>
	@endsection

## Login and Register Partials

For your convenience I have included a login form and register form for quickly modifying the look of your backend login.

	// include login section. Should be placed within a content area.

	@include('jd3_lte::partials.backend_login')

	// include register section. Should be placed within a content area.

	@include('jd3_lte::partials.backend_register')

allenjd3/adminlte-laravel is under the MIT license

Pull requests are welcome but keep the features simple and related. I don't want to have too much scope creep.
