@extends('master')
@section('content')
    <div class="col-md-4" style="text-align: center">
        <form action="update/{{$flower->id}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Product ..." name="name"
                           value="{{$flower->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" placeholder="$" name="price"
                           value="{{$flower->price}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group">
                    <label for="image">Image Product</label>
                    <input type="file" class="form-control-file" id="image" value="{{$flower->image}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit Pro</button>
        </form>
    </div>
    <div class="col-md-4" style="border-left: black 1px solid"></div>
    </div>
    </div>
@endsection
