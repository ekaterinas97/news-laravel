
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/album.css') }}" rel="stylesheet">
</head>

<body>

<x-news.header></x-news.header>

<main role="main">
    <div class="container-fluid">
    <div class="album py-5 bg-light">
        @yield('content')
    </div>
    </div>

</main>

<x-news.footer></x-news.footer>


</body>
</html>
