@extends('layouts.app')

@section('content')
<h1>Add Personal Info</h1>

<table class="table table-striped ">
    <tbody>
    <tr>
        <td colspan="1">
            <form class="well form-horizontal" action="/personal" method="POST">

                @include('personal.form')

                <button type="submit" class="btn btn-success">Add Personal Info</button>

                @csrf
            </form>
        </td>

    </tr>
    </tbody>
</table>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        $("#maritalstatus").change(function () {--}}
{{--            if ($(this).val() === "unmarried" || "divorced" || ""){--}}
{{--                $('#spouseDiv').hide();--}}
{{--            }else {--}}
{{--                $('#spouseDiv').show();--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

@endsection
