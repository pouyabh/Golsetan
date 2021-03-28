<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
@extends("master")
@section("content")
{{--    <div class="panel-info">--}}
{{--        @foreach($data as $d)--}}
{{--            <div class="panel-heading">{{$d->name}}</div>--}}
{{--            <div class="panel-body">{{$d->price}}</div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Styles/alisa-anton-AiTE9NFQZ3I-unsplash.jpg" style="height: 600px">
            </div>
            <div class="carousel-item">
                <img src="Styles/lan-deng-9P14G0L9E7w-unsplash.jpg" style="height: 600px">
            </div>
            <div class="carousel-item">
                <img src="Styles/zhou-yu-FKvoEKSV2LY-unsplash.jpg" style="height: 600px">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container" style="text-align: center">
        <h3 style="font-family: fantasy">Off</h3>
        <hr style="width: 100%;border-color: #0a58ca;text-align: center">
    </div>
    <div class="container" style="text-align: center">
        <div class="row" style="text-align: center">
            <div class="col-md-4" style="text-align: center">
                <img src="Styles/pro%201.jpg" class="img-responsive">
                <hr style="width: 100%;border-color: #0a58ca">
                <h3>Pro 1</h3>
                <h5>500$</h5>
                <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
            </div>
            <div class="col-md-4">
                <img src="Styles/pro%202.jpg" class="img-responsive">
                <hr style="width: 100%;border-color: #0a58ca">
                <h3>Pro 2</h3>
                <h5>500$</h5>
                <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
            </div>
            <div class="col-md-4">
                <img src="Styles/pro%203.jpg" class="img-responsive">
                <hr style="width: 100%;border-color: #0a58ca">
                <h3>Pro 3</h3>
                <h5>500$</h5>
                <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
            </div>
        </div>
        <div class="container" style="text-align: center">
            <h3 style="font-family: fantasy">Suggestion</h3>
            <hr style="width: 100%;border-color: #0a58ca;text-align: center">
        </div>
        <div class="container" style="text-align: center">
            <div class="row" style="text-align: center">
                <div class="col-md-4" style="text-align: center">
                    <img src="Styles/pro%201.jpg" class="img-responsive">
                    <hr style="width: 100%;border-color: #0a58ca">
                    <h3>Pro 1</h3>
                    <h5>500$</h5>
                    <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
                </div>
                <div class="col-md-4">
                    <img src="Styles/pro%202.jpg" class="img-responsive">
                    <hr style="width: 100%;border-color: #0a58ca">
                    <h3>Pro 2</h3>
                    <h5>500$</h5>
                    <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
                </div>
                <div class="col-md-4">
                    <img src="Styles/pro%203.jpg" class="img-responsive">
                    <hr style="width: 100%;border-color: #0a58ca">
                    <h3>Pro 3</h3>
                    <h5>500$</h5>
                    <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
                </div>
            </div>
        </div>
        <div class="container" style="text-align: center">
            <h3 style="font-family: fantasy">Best sellers</h3>
            <hr style="width: 100%;border-color: #0a58ca;text-align: center">
        </div>
        <div class="container" style="text-align: center">
            <div class="row" style="text-align: center">
                <div class="col-md-4" style="text-align: center">
                    <img src="Styles/pro%201.jpg" class="img-responsive">
                    <hr style="width: 100%;border-color: #0a58ca">
                    <h3>Pro 1</h3>
                    <h5>500$</h5>
                    <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
                </div>
                <div class="col-md-4">
                    <img src="Styles/pro%202.jpg" class="img-responsive">
                    <hr style="width: 100%;border-color: #0a58ca">
                    <h3>Pro 2</h3>
                    <h5>500$</h5>
                    <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
                </div>
                <div class="col-md-4">
                    <img src="Styles/pro%203.jpg" class="img-responsive">
                    <hr style="width: 100%;border-color: #0a58ca">
                    <h3>Pro 3</h3>
                    <h5>500$</h5>
                    <a href="#" class="btn btn-success" style="width: 100px">Buy</a>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>

