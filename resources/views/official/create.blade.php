@extends('layouts.app')

@section('content')
    <div style="margin-left: 25%">
        <h1>Add Official Info</h1>
    </div>


            <form class="ml-5 " action="/official" method="POST" enctype="multipart/form-data">
                <div class="ml-auto" >
                @include('official.form')
                    <div class="col-md-2 ml-5">
                <button type="submit" class="m-auto btn btn-success btn-block">Add Official Info</button>
                    </div>
                @csrf
                </div>
            </form>

{{--        </td>--}}

{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}

@endsection
