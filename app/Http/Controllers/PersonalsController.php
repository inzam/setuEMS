<?php

namespace App\Http\Controllers;

use App\Official;
use Illuminate\Support\Facades\Schema;
use App\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PersonalsController extends Controller
{

    public function index()
    {
        $personals = Personal::orderBy('created_at')->paginate(10);
        $official = Official::all();

        return view('personal.index',compact('personals', 'official'));
    }

    public function create()
    {
        $personals = Personal::all();
        $officials = Official::all();

        $personal = new Personal();

        return view('personal.create', compact('personal','personals','officials'));
    }


    public function store(Request $request)
    {
       $this->validateRequest();

        $personals = new Personal();

        $personals->nid = request('nid');
        $personals->passport = request('passport');
        $personals->dl = request('dl');
        $personals->dob = request('dob');
        $personals->gender = request('gender');
        $personals->father = request('father');
        $personals->mother = request('mother');
        $personals->gurrantor = request('gurrantor');
        $personals->maritalstatus = request('maritalstatus');
        $personals->spouse = request('spouse');
        $personals->children = request('children');
        $personals->presentaddress = request('presentaddress');
        $personals->permanentaddress = request('permanentaddress');
        $personals->official_id = request('official_id');

        $personals->save();

        return redirect('personal');
    }


    public function show(Personal $personal, Official $official)
    {
        return view('personal.show', compact('personal','official'));
    }


    public function edit(Personal $personal)
    {
        return view('personal.edit', compact('personal'));
    }


    public function update(Request $request, Personal $personal)
    {
        $personal->update($this->validateRequest());

        //$personal->save();

        return redirect('personal/'. $personal->id);
    }


    public function destroy(Request $request, Personal $personal)
    {
        $personal->delete();
        return redirect('personal');
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
            'permanentaddress' => 'required',
            'official_id' => 'required'
        ]);

    }
}
