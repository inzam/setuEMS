@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center">
        <h2>Edit {{ $official->name }}'s Official Info</h2>
    </div>

    <table class="table table-striped ">
       <tbody>
        <tr>
            <td colspan="1">
                <form class="well form-horizontal" action="/official/{{ $official->id }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')

                    @include('official.form')
                    <div class="col-md-2 ml-5">
                    <button type="submit" class="btn btn-outline-success">Save info</button>
                    </div>
                    @csrf
                </form>
            </td>

        </tr>
        </tbody>
    </table>


@endsection
