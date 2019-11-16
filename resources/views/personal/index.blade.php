@extends('layouts.app')

@section('content')

    <h1>Personal Info</h1>

    <table class="table table-hover table-responsive">
        <thead>
        <tr>
{{--            <th scope="col">#</th>--}}
            <th scope="col">NID</th>
            <th scope="col">Passport</th>
            <th scope="col">DL</th>
            <th scope="col">DOB</th>
            <th scope="col">Gender</th>
            <th scope="col">Father</th>
            <th scope="col">Mother</th>
            <th scope="col">Gurrantor</th>
            <th scope="col">Maritial Status</th>
            <th scope="col">Spouse</th>
            <th scope="col">Children</th>
            <th scope="col">Present Address</th>
            <th scope="col">Permanent Address</th>
            <th></th>
            <th></th>

        </tr>
        </thead>
    @foreach($personals as $personal)
            <tr>
                <td>{{ $personal->nid }}</td>
                <td>{{ $personal->passport }}</td>
                <td>@if($personal->dl) {{ 'Yes' }} @else{{ 'No' }} @endif</td>
                <td>{{ $personal->dob }}</td>
                <td>{{ $personal->gender }}</td>
                <td>{{ $personal->father }}</td>
                <td>{{ $personal->mother }}</td>
                <td>{{ $personal->gurrantor }}</td>
                <td>{{ $personal->maritalstatus }}</td>
                <td>@if($personal->maritalstatus == 'unmarried'){{ 'N/A'}}
                    @elseif ($personal->maritalstatus == 'divorced'){{ 'N/A' }}
                    @else {{ $personal->spouse }} @endif</td>
                <td>{{ $personal->children }}</td>
                <td>{{ $personal->presentaddress }}</td>
                <td>{{ $personal->permanentaddress }}</td>
                <td><a type="button" href="/personal/{{ $personal->id }}/edit"  class="btn btn-outline-warning">Edit</a></td>
                <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
            </tr>
    @endforeach
    </table>

    <div class="row">
        <div class="col-12 text-center">
            {{ $personals->links() }}
        </div>
    </div>

    <a type="button" class="btn btn-primary btn-block" href="{{ url('personal/create') }}">Add New</a>

@endsection
