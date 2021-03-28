@extends('master')
@section('content')

    <div class="container">
        <div class="row" style="text-align: center">
            <div class="col-md-4">
                @foreach($comments as $comment)
                    @if($comment->flower_id == $flowers->id)
                        <div class="panel-info">
                            <div class="panel-heading">{{$comment->user->name}}</div>
                            <div class="panel-body">{{$comment->text}}</div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4">
                <img src="/uploaded/{{$flowers->image}}" class="img-responsive">
                <h3>{{$flowers->name}}</h3>
                <h6>{{$flowers->price}}</h6>
                <a href="{{route('priceinfo',['id'=>$flowers->id])}}" class="btn btn-primary">Buy</a>
            </div>
            <div class="col-md-4" style="text-align: center">
                @if(session('msg')!=null)
                    <div class="alert alert-success" role="alert" style="text-align: center">
                        <h4>
                            {{session('msg')}}
                        </h4>
                    </div>
                @endif
                <h3>Your Comment</h3>
                <form method="post" action="{{route('addcomment',['id'=>$flowers->id])}}" class="form-group">
                    @csrf
                    <textarea cols="50" rows="5" name="comment" class="form-controll"></textarea>
                    <button type="submit" class="btn btn-info">Comment</button>
                </form>

            </div>

@endsection
