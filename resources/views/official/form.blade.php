<fieldset class="ml-5">
    <div class="form-group">
        <label class="col-md-4 control-label">Office ID</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"></span>
                <input id="officeID" name="officeID" placeholder="Office ID"
                       class="form-control" required value="{{ old('officeID') ?? $official->officeID }}" type="text">
            </div>
        </div>
        @if($errors->first('officeID')) <div class="alert alert-danger">{{ $errors->first('officeID') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Name</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="name" name="name" placeholder="Full Name"
              class="form-control" required value="{{ old('name') ?? $official->name }}" type="text"></div>
        </div>
        @if($errors->first('name')) <div class="alert alert-danger">{{ $errors->first('name') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Upload Profile Photo</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="pp" name="pp"
                 class="form-control-file" required type="file">
            </div>
        </div>
        @if($errors->first('pp')) <div class="alert alert-danger">{{ $errors->first('pp') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="bloodgroup">Blood Group</label>
        <div class="col-md-8 inputGroupContainer">
            <select class="custom-select" required id="bloodgroup" name="bloodgroup">
                <option selected value="">Choose...</option>
                <option value="A+" {{ old('bloodgroup') == 'A+' ?'selected' : '' }}>A+(pos)</option>
                <option value="A-" {{ old('bloodgroup') == 'A-' ?'selected' : '' }}>A-(neg)</option>
                <option value="B+" {{ old('bloodgroup') == 'B+' ?'selected' : '' }}>B+(pos)</option>
                <option value="B-" {{ old('bloodgroup') == 'B-' ?'selected' : '' }}>B-(neg)</option>
                <option value="O+" {{ old('bloodgroup') == 'O+' ?'selected' : '' }}>O+(pos)</option>
                <option value="O-" {{ old('bloodgroup') == 'O-' ?'selected' : '' }}>O-(neg)</option>
                <option value="AB+" {{ old('bloodgroup') == 'AB+' ?'selected' : '' }}>AB+(pos)</option>
                <option value="AB-" {{ old('bloodgroup') == 'AB-' ?'selected' : '' }}>AB-(NEG)</option>
            </select>
        </div>
        @if($errors->first('bloodgroup')) <div class="alert alert-danger">{{ $errors->first('bloodgroup') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">E-mail</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="email" name="email" placeholder="example@example.com"
                class="form-control" required value="{{ old('email') ?? $official->email }}" type="email">
            </div>
        </div>
        @if($errors->first('email')) <div class="alert alert-danger">{{ $errors->first('email') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Mobile Number</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="mobilenumber" name="mobilenumber" placeholder="Mobile Number"
                 class="form-control" required value="{{ old('mobilenumber') ?? $official->mobilenumber }}" type="tel">
            </div>
        </div>
        @if($errors->first('mobilenumber')) <div class="alert alert-danger">{{ $errors->first('mobilenumber') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Family Mobile Number</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="familymobile" name="familymobile" placeholder="Family Mobile Number"
                 class="form-control" required value="{{ old('familymobile') ?? $official->familymobile }}" type="tel">
            </div>
        </div>
        @if($errors->first('familymobile')) <div class="alert alert-danger">{{ $errors->first('familymobile') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Gurrantor's Mobile Number</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="gurrantormobile" name="gurrantormobile" placeholder="Gurrantor's Mobile Number"
                class="form-control" required value="{{ old('gurrantormobile') ?? $official->gurrantormobile }}" type="tel">
            </div>
        </div>
        @if($errors->first('gurrantormobile')) <div class="alert alert-danger">{{ $errors->first('gurrantormobile') }}</div>@endif
    </div>
    <div class="form-group" id="">
        <label class="col-md-4 control-label">Educational Qualification</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="eduquali" name="eduquali" placeholder="Last degree achieved"
                  class="form-control" value="{{ old('eduquali') ?? $official->eduquali }}" type="text">
            </div>
        </div>
        @if($errors->first('eduquali')) <div class="alert alert-danger">{{ $errors->first('eduquali') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Result (last educational qualification achieved)</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="lasteduresult" name="lasteduresult" placeholder="Result"
                 class="form-control" value="{{ old('lasteduresult') ?? $official->lasteduresult }}" type="text">
            </div>
        </div>
        @if($errors->first('lasteduresult')) <div class="alert alert-danger">{{ $errors->first('lasteduresult') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Educational Institution (last)</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="eduinstitute" name="eduinstitute" placeholder="Educational Institution"
                 class="form-control" value="{{ old('eduinstitute') ?? $official->eduinstitute }}" type="text">
            </div>
        </div>
        @if($errors->first('eduinstitute')) <div class="alert alert-danger">{{ $errors->first('eduinstitute') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Year of Passing</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="yearofpass" name="yearofpass" placeholder="Permanent Address"
                 class="form-control" value="{{ old('yearofpass') ?? $official->yearofpass }}" type="text">
            </div>
        </div>
        @if($errors->first('yearofpass')) <div class="alert alert-danger">{{ $errors->first('yearofpass') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Last Working Institution</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="lastworkinginst" name="lastworkinginst" placeholder="Last Working Institution"
                 class="form-control" value="{{ old('lastworkinginst') ?? $official->lastworkinginst }}" type="text">
            </div>
        </div>
        @if($errors->first('lastworkinginst')) <div class="alert alert-danger">{{ $errors->first('lastworkinginst') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Last Working Designation</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="lastworkingdesig" name="lastworkingdesig" placeholder="Last Working Designation"
                 class="form-control" value="{{ old('lastworkingdesig') ?? $official->lastworkingdesig }}" type="text">
            </div>
        </div>
        @if($errors->first('lastworkingdesig')) <div class="alert alert-danger">{{ $errors->first('lastworkingdesig') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Last Working Duration</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="lastworkingduration" name="lastworkingduration" placeholder="Last Working Duration"
                  class="form-control" value="{{ old('lastworkingduration') ?? $official->lastworkingduration }}" type="text">
            </div>
        </div>
        @if($errors->first('lastworkingduration')) <div class="alert alert-danger">{{ $errors->first('lastworkingduration') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Similar Work Experience Duration if any</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="similarexperience" name="similarexperience" placeholder="Similar Work Experience Duration"
                  class="form-control" value="{{ old('similarexperience') ?? $official->similarexperience }}" type="text">
            </div>
        </div>
        @if($errors->first('similarexperience')) <div class="alert alert-danger">{{ $errors->first('similarexperience') }}</div>@endif
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Extra Curricular Activities</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><input id="extracurricular" name="extracurricular" placeholder="Extra Curricular Activities"
                  class="form-control" value="{{ old('extracurricular') ?? $official->extracurricular }}" type="text">
            </div>
        </div>
        @if($errors->first('extracurricular')) <div class="alert alert-danger">{{ $errors->first('extracurricular') }}</div>@endif
    </div>
</fieldset>

