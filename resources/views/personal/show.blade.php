@extends('layouts.app')

@section('content')
    <h2>Personal Details of {{ $personal->id }}</h2>
    <div class="card" style="width:400px">
        <img class="card-img-top" src="" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">{{$personal->id}}</h4>
            <p class="card-text">National ID: {{ $personal->nid }}</p>
            <p class="card-text">Date of Birth: {{ $personal->dob }}</p>
            <p class="card-text">Age: {{ Carbon\Carbon::parse($personal->dob)->age }} Years Old</p>
            <p class="card-text">Gender: {{ $personal->gender }}</p>
            <p class="card-text">Father'Name: {{ $personal->father }}</p>
            <p class="card-text">Mother's Name: {{ $personal->mother }}</p>
            <p class="card-text">Present Address: {{ $personal->presentaddress }}</p>
            <p class="card-text">Permanent Address: {{ $personal->permanentaddress }}</p>
            <p class="card-text">Marital Status: {{ $personal->maritalstatus }}</p>
            <p class="card-text">Spouse: @if($personal->spouse){{$personal->spouse}}@else {{'N/A'}}@endif</p>
            <p class="card-text">Number Of Child: @if($personal->child){{$personal->child}}@else {{'N/A'}}@endif</p>
            <p class="card-text">Passport: @if ($personal->passport) {{ $personal->passport }}
                @else {{'N/A'}} @endif</p>
            <p class="card-text">Driving License: @if ($personal->dl) {{ 'Yes' }}
                @else {{'No'}} @endif</p>

            <a href="/personal/{{ $personal->id }}/edit" class="btn btn-outline-primary">Edit Personal Info</a>
            <a href="/personal" class="btn btn-outline-secondary">Back</a>
        </div>
    </div>
@endsection
