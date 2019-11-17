@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center ml-auto">
        <h2>Personal Details of {{ $personal->id }}</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">{{$personal->id}}</h4>
                <p class="card-text"><strong>National ID:</strong> {{ $personal->nid }}</p>
                <p class="card-text"><strong>Date of Birth:</strong> {{ $personal->dob }}</p>
                <p class="card-text"><strong>Age:</strong> {{ Carbon\Carbon::parse($personal->dob)->age }} Years Old</p>
                <p class="card-text"><strong>Gender:</strong> {{ $personal->gender }}</p>
                <p class="card-text"><strong>Father'Name:</strong> {{ $personal->father }}</p>
                <p class="card-text"><strong>Mother's Name:</strong> {{ $personal->mother }}</p>
                <p class="card-text"><strong>Present Address:</strong> {{ $personal->presentaddress }}</p>
                <p class="card-text"><strong>Permanent Address:</strong> {{ $personal->permanentaddress }}</p>
                <p class="card-text"><strong>Marital Status:</strong> {{ $personal->maritalstatus }}</p>
                <p class="card-text"><strong>Spouse:</strong> @if($personal->spouse){{$personal->spouse}}@else {{'N/A'}}@endif</p>
                <p class="card-text"><strong>Number Of Child:</strong> @if($personal->child){{$personal->child}}@else {{'N/A'}}@endif</p>
                <p class="card-text"><strong>Passport:</strong> @if ($personal->passport) {{ $personal->passport }}
                    @else {{'N/A'}} @endif</p>
                <p class="card-text font-weight-bold"><strong>Driving License:</strong> @if ($personal->dl) {{ 'Yes' }}
                    @else {{'No'}} @endif</p>

               <div class="d-flex justify-content-end">
                   <a href="/personal/{{ $personal->id }}/edit" class="btn btn-outline-primary">Edit Personal Info</a>
                   <a href="/personal" class="btn btn-outline-secondary">Back</a>
               </div>
            </div>
        </div>
    </div>

@endsection
