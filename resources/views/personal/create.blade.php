@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div style="margin-left: 25%">
                <h1>Add Personal Info</h1>
                </div>


            <form class="ml-5" action="/personal" method="POST">

                @include('personal.form')

                <button type="submit" class="btn btn-success btn-block m-auto">Add Personal Info</button>

                @csrf
            </form>

            </div>
        </div>
    </div>

@endsection
