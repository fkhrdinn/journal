<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Journal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
		<a class="navbar-brand" href="#">JOURNAL</a>
	</nav>

	<div class="container-fluid">
		<div class="row justify-content-center mt-3">
			<div class="col-md-9 col-lg-10 rounded shadow-lg bg-secondary">
                <div class="mx-3 my-3">
                    <div class="alert alert-primary" role="alert">
                        Life
                    </div>
                    
                    <livewire:life/>

                    <div class="alert alert-primary mt-5" role="alert">
                        Confession
                    </div>

                    <livewire:confession/>
                    
                </div>
			</div>
		</div>
	</div>
    @include('sweetalert::alert')
    @livewireScripts
    </body>
</html>
