@extends('layouts.app')

@section('content')
    <div class="h-100 row align-items-center" style="align-content: center">
        <div class="col">
            <div class="d-flex justify-content-center"><h1>Official Info</h1></div>


        <table class="table table-hover table-responsive text-center" style="margin-left: 25%; margin-right: 25%">
            <thead>
            <tr>
                <th scope="col">Office ID</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Email</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Action</th>
                <th></th>

            </tr>
            </thead>
            @foreach($officials as $official)
                <tr onclick="document.location='/official/{{$official->id}}'" style="cursor:hand">
                    <td>{{ $official->officeID }}</td>
                    <td>{{ $official->name }}</td>
                    <td>{{ $official->personalmobile }}</td>
                    <td>{{ $official->email }}</td>
                    <td>{{ $official->bloodgroup }}</td>
                    <td><a type="button" href="/official/{{ $official->id }}/edit"  class="btn btn-outline-warning">Edit</a></td>
                    <td>
                        <form action="/official/{{ $official->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>


    <div class="row">
        <div class="col-12 text-center">
            {{ $officials->links() }}
        </div>
    </div>
    <div class="col-md-2 m-auto">
        <a type="button" class="btn btn-primary btn-block" href="{{ url('official/create') }}">Add New</a>
    </div>
        </div>
    </div>
@endsection
