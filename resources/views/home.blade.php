@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <a href="/official" class="btn btn-outline-info btn-block my-2" style="font-size: larger">Official Information</a>
            <a href="/personal" class="btn btn-outline-info btn-block my-2" style="font-size: larger">Personal Information</a>
            <a href="#" class="btn btn-outline-info btn-block my-2" style="font-size: larger">HR Information</a>
            <a href="#" class="btn btn-outline-info btn-block my-2" style="font-size: larger">Job Performance Analysis</a>
            <a href="#" class="btn btn-outline-info btn-block my-2" style="font-size: larger">Accounts Information</a>
        </div>
    </div>
</div>
@endsection
