@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4" style="border-right: black 1px solid">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('msg')!=null)
            {
            <div class="alert alert-success" role="alert" style="text-align: center">
                <h4>
                    {{session('msg')}}
                </h4>
            </div>
            }@endif
        </div>
        <div class="col-md-4" style="text-align: center">
            <form action="update/{{$news->id}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="title ..." name="title" value="{{$news->title}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Body</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" placeholder="$" name="body" value="{{$news->body}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">edit News</button>
            </form>
        </div>
        <div class="col-md-4" style="border-left: black 1px solid"></div>
    </div>
</div>

@endsection
