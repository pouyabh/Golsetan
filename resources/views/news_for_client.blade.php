@extends("master")
@section("content")
    <div class="container">
        <div class="row">
            @foreach($news as $n)
                <div class="col-md-4">

                    <h3> title : {{$n->title}}</h3>
                    <h6> Body : {{$n->body}}</h6>
                    <h6> {{jdate($n->created_at)->format('%d %B %y H:i:s')}}</h6>
                    <hr>

                </div>
            @endforeach
        </div>
    </div>
@endsection

