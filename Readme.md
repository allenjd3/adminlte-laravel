# Super Simple AdminLTE package for quick AdminLTE backends.

##Installation

//This is where the install command for composer will go.

Add the service provider to your config/app.php

    Allenjd3\Adminlte\AdminlteComponentProvider::class,

##1. Extend the backend

First you are going to want to extend the backend.

    @extend('jd3_lte::layouts.backend_app')

##2. Insert components

    @section('content')

        //insert your content here.

    @endsection

Within the content section of the extended backend, you can use the following components.

###Button

    @component('jd3_lte::slots.button')
        @slot('name', 'Jim Allen') // This one is mandatory
        @slot('type', 'danger') // primary is default. Can also be warning or info
        //default slot is unused in this component
    @endcomponent

This will print the following

    <button type="submit" class="btn btn-{{$type or "primary"}}">{{$name}}</button>