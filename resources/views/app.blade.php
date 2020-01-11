<!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<title>Setting up Bootstrap in Laravel</title>
    	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    @include('navbar')
    <main role="main" class="flex-shrink-0">
    <div class="container">
    	@yield('content')
    </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
    </html>