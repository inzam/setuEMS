<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Official;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class OfficialsController extends Controller
{

    public function index()
    {
        $officials = Official::orderBy('created_at')->paginate(10);

        return view('official.index',compact('officials'));
    }

    public function create()
    {
        $officials = Official::all();

        $official = new Official();

        return view('official.create', compact('official','officials'));
    }


    public function store(Request $request)
    {
        $this->validateRequest();

        $officials = new Official();

        $officials->officeID = request('officeID');
        $officials->name = request('name');
        $officials->bloodgroup = request('bloodgroup');
        $officials->personalmobile = request('personalmobile');
        $officials->familymobile = request('familymobile');
        $officials->gurrantormobile = request('gurrantormobile');
        $officials->email = request('email');
        $officials->extracurricular = request('extracurricular');
        $officials->eduquali = request('eduquali');
        $officials->lasteduresult = request('lasteduresult');
        $officials->eduinstitute = request('eduinstitute');
        $officials->yearofpass = request('yearofpass');
        $officials->lastworkinginst = request('lastworkinginst');
        $officials->lastworkingdesig = request('lastworkingdesig');
        $officials->lastworkingduration = request('lastworkingduration');
        $officials->similarexperience = request('similarexperience');

        $this->storeFile($officials);

        $officials->save();

        return redirect('official');
    }


    public function show(Official $official)
    {
        return view('official.show', compact('official'));
    }


    public function edit(official $official)
    {
        return view('official.edit', compact('official'));
    }


    public function update(Request $request, Official $official)
    {
        $official->update($this->validateRequest());

        $this->storeFile($official);

        return redirect('official/'. $official->id);
    }


    public function destroy(Request $request, Official $official)
    {
        $official->delete();
        return redirect('official');
    }

    //    form validation
    public function validateRequest(){

        $validatedData =  request()->validate([

            'officeID' => 'required',
            'name' => 'required',
            'bloodgroup' => 'required',
            'personalmobile' => 'required',
            'familymobile' => 'required',
            'gurrantormobile' => 'required',
            'email' => 'required|email',
            'extracurricular' => 'nullable|string',
            'eduquali' => 'required|string',
            'lasteduresult' => 'nullable|string',
            'eduinstitute' => 'nullable|string',
            'yearofpass' => 'nullable|string',
            'lastworkinginst' => 'nullable|string',
            'lastworkingdesig' => 'nullable|string',
            'lastworkingduration' => 'nullable|string',
            'similarexperience' => 'nullable|string',
            //'pp' => 'nullable|image|max:1000',

        ]);
        if(request()->hasFile('pp')){
            request()->validate([
                'pp' => 'file|image|max:1000'
            ]);
        }

        return $validatedData;
    }
    //image store
    public function storeFile(Official $official){
        if(request()->has('pp')){
            //dd(request()->file);
            $official->update([
                'pp' => request()->pp->store('profilePhoto', 'public')
            ]);
        }
    }
}
