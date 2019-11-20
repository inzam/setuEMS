@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
    <div style="margin-left: 25%">
        <h1>Add Official Info</h1>
    </div>


            <form class="ml-5 " action="/official" method="POST" enctype="multipart/form-data">
                <div class="ml-auto" >
                @include('official.form')
                    <div class="">
                <button type="submit" class="m-auto btn btn-success btn-block">Add Official Info</button>
                    </div>
                @csrf
                </div>
            </form>

{{--        </td>--}}

{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}
        </div>
        </div>
    </div>
@endsection
