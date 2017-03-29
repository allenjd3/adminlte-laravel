# Super Simple AdminLTE package for quick AdminLTE backends.

## Installation

//This is where the install command for composer will go.

Add the service provider to your config/app.php

    Allenjd3\Adminlte\AdminlteComponentProvider::class,

## 1. Extend the backend

First you are going to want to extend the backend.

    @extend('jd3_lte::layouts.backend_app')

## 2. Insert components

    @section('content')

        //insert your content here.

    @endsection

Within the content section of the extended backend, you can use the following components.

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

### Form Component

	@composer('jd3_lte::slots.form_component')
		@slot('formId', 'form1') //mandatory
		@slot('type', 'email') //defaults to text
		@slot('placeholder','Your Email') //defaults to nothing
		@slot('value', 'mrmagoo.aol.net') //defaults to nothing
		//default slot is unused in this component
	@endcomposer

This will print the following

	<div class="form-group">
	  <label for="{{$formId}}">{{$label}}</label>
	  <input type="{{$type or "text"}}" class="form-control" id="{{$formId}}" placeholder="{{$placeholder or ""}}" value="{{$value or ""}}">
	</div>