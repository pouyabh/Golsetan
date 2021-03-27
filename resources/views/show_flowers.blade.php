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
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                    </tr>
                    </thead>
                    @foreach($flowers as $flower)
                        <tbody>
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$flower->name }}</td>
                            <td>{{$flower->price}}</td>
                            <td> <img src="uploaded/{{$flower->image}}" class="img-responsive"></td>
                            <td><a href="delete_flo/{{$flower->id}}/{{$flower->image}}"> <span class="glyphicon glyphicon-trash" style="color: red"> Delete </span></a></td>
                            <td><a href="edit/{{$flower->id}}"> <span class="glyphicon glyphicon-edit" style="color: blue"> Edite </a>  </span>
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
