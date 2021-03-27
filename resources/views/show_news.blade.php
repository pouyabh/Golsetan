@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">


                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">Body</th>
                    </tr>
                    </thead>
                    @foreach($news as $new)
                        <tbody>
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$new->title }}</td>
                            <td>{{$new->body}}</td>
                            <td><a href="delete_news/{{$new->id}}"> <span class="glyphicon glyphicon-trash" style="color: red"> Delete </span></a></td>
                            <td><a href="edit_news/{{$new->id}}"> <span class="glyphicon glyphicon-edit" style="color: blue"> Edite </a>  </span>
                            </td>

                        </tr>
                        </tbody>
                    @endforeach;
                </table>


            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
