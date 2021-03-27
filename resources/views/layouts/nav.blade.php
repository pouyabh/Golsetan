<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فروشگاه آنلاین گُل‌سِتان</title>
    <link rel="icon" type="image/png" href="{{asset('Styles/icons8-flower-64.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div id="header">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#" style="font-family: fantasy">GolSetan</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Show_flowers_for_c" style="font-family: 'Bookman Old Style'">Flowers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="font-family: 'Bookman Old Style'">Gift</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="show_news_f_c" style="font-family: 'Bookman Old Style'">News</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                   style="font-family: 'Bookman Old Style'">
                    Special Day
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" style="font-family: 'Bookman Old Style'">Father Day</a>
                    <a class="dropdown-item" href="#" style="font-family: 'Bookman Old Style'">Mother Day</a>
                    <a class="dropdown-item" href="#" style="font-family: 'Bookman Old Style'">Valentine</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" style="margin-left: 200px">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                   style="width: 400px">
            <span class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search <span
                    class=" glyphicon glyphicon-search"></span></span>/button>
        </form>
        @if(\Illuminate\Support\Facades\Auth::check())
            <a href="#" style="margin-left: 170px" class="btn btn-dark">Cart<span
                    class="glyphicon glyphicon-shopping-cart"></span></a>
            @if((auth()->user()->IsAdmin) == 1)
                <a href="admin_profile"  style="margin-left: 20px" class="btn btn-primary">Admin<span class="glyphicon glyphicon-user"></span></a>
            @endif
                <a href="client_profile"  style="margin-left: 20px" class="btn btn-primary"><span
                    class="glyphicon glyphicon-user"> Profile </span></a>
        @else
            <a href="login" style="margin-left: 200px" class="btn btn-success">Login<span class="glyphicon glyphicon-log-in"></span></a>
            <a href="register"  style="margin-left: 10px"class="btn btn-success">Signnup<span class="glyphicon glyphicon-log-in"></span></a>
        @endif;


    </nav>

</div>
</body>
</html>
