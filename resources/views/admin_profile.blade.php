@extends("master")
@section("content")
    @if((auth()->user()->IsAdmin) == 1)
    <div class="container" style="text-align: center">
        <h2> Welcome Dear {{auth()->user()->name}}</h2>

        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active"><a href="form_add_flower" style="color: black">Add Flower</a></li>
                    <li class="list-group-item"><a href="form_add_news" style="color: black">Add News</a></li>
                    <li class="list-group-item"><a href="Show_flower" style="color:black ">Show Flower</a></li>
                    <li class="list-group-item"><a href="Show_news" style="color:black ">Show News</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: red">
                        <form method="post" action="logout" style="margin-left: 10px" >
                            @csrf
                            <button type="submit" class="btn btn_danger"> logout</button>
                        </form>
                    </li>
                    <li class="list-group-item"><a href="add_flower" style="color:black ">Add Flower</a></li>
                </ul>
            </div>
        </div>
    @endif
@endsection
