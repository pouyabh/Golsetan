@extends("master")
@section("content")
    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-md-6">
                <h2> Welcome Dear {{auth()->user()->name}}</h2>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: red">
                        <form method="post" action="logout" style="margin-left: 10px">
                            @csrf
                            <button type="submit" class="btn btn_danger"> logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
@endsection
