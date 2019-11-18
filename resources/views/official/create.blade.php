@extends('layouts.app')

@section('content')
<h1>Add Official Info</h1>

{{--<table class="table ">--}}
{{--    <tbody>--}}
{{--    <tr>--}}
{{--        <td colspan="1">--}}
            <form class="ml-5 " action="/official" method="POST">
                <div class="ml-auto">
                @include('official.form')

                <button type="submit" class="m-auto btn btn-success btn-block">Add Official Info</button>

                @csrf
                </div>
            </form>

{{--        </td>--}}

{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}

@endsection
