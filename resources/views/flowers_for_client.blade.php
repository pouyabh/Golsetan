@extends("master")
@section("content")
    <div class="container">
        <div class="row" style="text-align: center">
            @foreach($flowers as $n)
                <div class="col-md-4">
                    <img src="uploaded/{{$n->image}}" class="img-responsive">
                    <h3>{{$n->name}}</h3>
                    <h6>{{$n->price}}</h6>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            @endforeach
        </div>
        <hr>

    </div>
@endsection
