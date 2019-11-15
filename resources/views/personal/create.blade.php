@extends('layouts.app')

@section('content')
<h1>Add Personal Info</h1>

<table class="table table-striped ">
    <tbody>
    <tr>
        <td colspan="1">
            <form class="well form-horizontal" action="/personal" method="POST">
                <fieldset class="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">NID</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"></span><input id="nid" name="nid" placeholder="NID"
                                   class="form-control" required="true" value="{{ old('nid') ?? $personal->nid }}" type="text"></div>
                        </div>
                        @if($errors->first('nid')) <div class="alert alert-danger">{{ $errors->first('nid') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Passport Number</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="passport" name="passport" placeholder="Passport Number"
                                   class="form-control" value="{{ old('passport') ?? $personal->passport }}" type="text"></div>
                        </div>
                        @if($errors->first('passport')) <div class="alert alert-danger">{{ $errors->first('passport') }}</div>@endif
                    </div>
                    <div class="form-group ml-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="dl" name="dl">
                            <label class="form-check-label col-md-2 mr-0 control-label" for="dl">
                                Driving License
                            </label>
                        </div>
                        @if($errors->first('dl')) <div class="alert alert-danger">{{ $errors->first('dl') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date of Birth</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="dob" name="dob"  class="form-control" required value="{{ old('dob') ?? $personal->dob }}" type="date"></div>
                        </div>
                        @if($errors->first('dob')) <div class="alert alert-danger">{{ $errors->first('dob') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="gender">Gender</label>
                        <div class="col-md-8 inputGroupContainer">
                            <select class="custom-select " id="gender" name="gender">
                                <option selected>Choose...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        @if($errors->first('gender')) <div class="alert alert-danger">{{ $errors->first('gender') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Father's Name</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="father" name="father" placeholder="Father's Name"
                                  class="form-control" required value="{{ old('father') ?? $personal->father }}" type="text"></div>
                        </div>
                        @if($errors->first('father')) <div class="alert alert-danger">{{ $errors->first('father') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Mother's Name</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="mother" name="mother" placeholder="mother's Name"
                                class="form-control" required value="{{ old('mother') ?? $personal->mother }}" type="text"></div>
                        </div>
                        @if($errors->first('mother')) <div class="alert alert-danger">{{ $errors->first('mother') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Gurrantor's Name</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="gurrantor" name="gurrantor" placeholder="Gurrantor's Name"
                                 class="form-control" required value="{{ old('gurrantor') ?? $personal->gurrantor }}" type="text"></div>
                        </div>
                        @if($errors->first('gurrantor')) <div class="alert alert-danger">{{ $errors->first('gurrantor') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="maritalstatus">Marital Status</label>
                        <div class="col-md-8 inputGroupContainer">
                            <select class="custom-select " id="maritalstatus" name="maritalstatus">
                                <option selected>Choose...</option>
                                <option value="1">Unmarried</option>
                                <option value="2">Married</option>
                                <option value="3">Divorced</option>
                                <option value="3">Widowed</option>
                            </select>
                        </div>
                        @if($errors->first('maritalstatus')) <div class="alert alert-danger">{{ $errors->first('maritalstatus') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Spouse's Name</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="spouse" name="spouse" placeholder="Spouse's Name"
                                class="form-control" value="{{ old('spouse') ?? $personal->spouse }}" type="text"></div>
                        </div>
                        @if($errors->first('spouse')) <div class="alert alert-danger">{{ $errors->first('spouse') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Number of Children</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="children" name="children" placeholder="Number of children"
                                 class="form-control" value="{{ old('children') ?? $personal->children }}" type="text"></div>
                        </div>
                        @if($errors->first('children')) <div class="alert alert-danger">{{ $errors->first('children') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Present Address</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="presentaddress" name="presentaddress" placeholder="Present Address"
                                 class="form-control" required value="{{ old('presentaddress') ?? $personal->presentaddress }}" type="text"></div>
                        </div>
                        @if($errors->first('presentaddress')) <div class="alert alert-danger">{{ $errors->first('presentaddress') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Permanent Address</label>
                        <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><input id="permanentaddress" name="permanentaddress" placeholder="Permanent Address"
                                 class="form-control" required value="{{ old('permanentaddress') ?? $personal->permanentaddress }}" type="text"></div>
                        </div>
                        @if($errors->first('permanentaddress')) <div class="alert alert-danger">{{ $errors->first('permanentaddress') }}</div>@endif
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-success">Add Personal Info</button>

                @csrf
            </form>
        </td>

    </tr>
    </tbody>
</table>
@endsection
