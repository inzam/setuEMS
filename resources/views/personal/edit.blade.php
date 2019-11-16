@extends('layouts.app')

@section('content')

    <h2>Edit item {{ $personal->id }}</h2>

    <table class="table table-striped ">
        <tbody>
        <tr>
            <td colspan="1">
                <form class="well form-horizontal" action="/personal/{{ $personal->id }}" method="POST">
                    @method('PATCH')

                    @include('personal.form')

                    <button type="submit" class="btn btn-success">Save info</button>

                    @csrf
                </form>
            </td>

        </tr>
        </tbody>
    </table>


@endsection
