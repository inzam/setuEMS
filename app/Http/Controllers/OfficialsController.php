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

        $officials->nid = request('nid');
        $officials->passport = request('passport');
        $officials->dl = request('dl');
        $officials->dob = request('dob');
        $officials->gender = request('gender');
        $officials->father = request('father');
        $officials->mother = request('mother');
        $officials->gurrantor = request('gurrantor');
        $officials->maritalstatus = request('maritalstatus');
        $officials->spouse = request('spouse');
        $officials->children = request('children');
        $officials->presentaddress = request('presentaddress');
        $officials->permanentaddress = request('permanentaddress');

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

        //$official->save();

        return redirect('official/'. $official->id);
    }


    public function destroy(Request $request, Official $official)
    {
        $official->delete();
        return redirect('official');
    }

    //    form validation
    public function validateRequest(){

        return request()->validate([

            'nid' => 'required|numeric',
            'passport' => 'nullable',
            'dl' => 'nullable',
            'dob' => 'date',
            'gender' => 'required',
            'father' => 'required|string',
            'mother' => 'required|string',
            'gurrantor' => 'required|string',
            'maritalstatus' => 'required',
            'spouse' => 'nullable|string',
            'children' => 'nullable|numeric',
            'presentaddress' => 'required',
            'permanentaddress' => 'required'
        ]);

    }
}
