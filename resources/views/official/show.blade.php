@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center ml-auto">
        <h2>Official Details of {{ $official->name }}</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card" style="width:400px">
            @if($official->pp)
                <img class="card-img-top" src="{{ asset('storage/'.$official->pp) }}" alt="{{$official->name}}" style="width:100%">
            @endif
            <div class="card-body">
                <h4 class="card-title">{{$official->OfficeID}}</h4>
                <p class="card-text"><strong>Full Name:</strong> {{ $official->name }}</p>
                <p class="card-text"><strong>Blood Group:</strong> {{ $official->bloodgroup }}</p>
                <p class="card-text"><strong>E-mail:</strong> {{ $official->email }}</p>
                <p class="card-text"><strong>Personal Mobile Number:</strong> {{ $official->personalmobile }}</p>
                <p class="card-text"><strong>Family Mobile Number:</strong> {{ $official->familymobile }}</p>
                <p class="card-text"><strong>Gurantor's Mobile Number:</strong> {{ $official->gurrantormobile }}</p>
                <p class="card-text"><strong>Educational Qualification:</strong> {{ $official->eduquali }}</p>
                @if($official->lasteduresult)
                <p class="card-text"><strong>Result (last degree achieved):</strong> {{ $official->lasteduresult }}</p>
                @endif
                @if($official->eduinstitute)
                <p class="card-text"><strong>Last Educational Institution:</strong> {{ $official->eduinstitute }}</p>
                @endif
                @if($official->yearofpass)
                <p class="card-text"><strong>Year of Passing:</strong> {{ $official->yearofpass }}</p>
                @endif
                @if($official->lastworkinginst)
                    <p class="card-text"><strong>Last Wonking Institution:</strong> {{ $official->lastworkinginst }}</p>
                @endif
                @if($official->lastworkingdesig)
                    <p class="card-text"><strong>Last Wonking Designation:</strong> {{ $official->lastworkingdesig }}</p>
                @endif
                @if($official->lastworkingduration)
                    <p class="card-text"><strong>Last Wonking Duration:</strong> {{ $official->lastworkingduration }}</p>
                @endif
                @if($official->similarexperience)
                    <p class="card-text"><strong>Similar Work Experience Duration:</strong> {{ $official->similarexperience }}</p>
                @endif
                @if($official->extracurricular)
                    <p class="card-text"><strong>Extracurricular Activities:</strong> {{ $official->extracurricular }}</p>
                @endif



               <div class="d-flex justify-content-end">
                   <a href="/official/{{ $official->id }}/edit" class="btn btn-warning">Edit official Info</a>
                   <a href="/official" class="btn btn-secondary">Back</a>
               </div>
            </div>
        </div>
    </div>

@endsection
