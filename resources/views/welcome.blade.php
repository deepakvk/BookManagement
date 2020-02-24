<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body>
	<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <example-component></example-component>
        </div>
    </div>
</div>
	<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
