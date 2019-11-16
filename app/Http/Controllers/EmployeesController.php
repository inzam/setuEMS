<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index()
    {
        $personals = Personal::orderBy('created_at')->paginate(10);

        return view('personal.index',compact('personals'));
    }

    public function create()
    {
        $personals = Personal::all();

        $personal = new Personal();

        return view('personal.create', compact('personal','personals'));
    }


    public function store(Request $request)
    {
        dd($request->dl);
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

        $personals->save();

        return redirect('personal');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    //    form validation
    public function validateRequest(){

        return tap(request()->validate([

            'nid' => 'required|numeric',
            'passport' => 'nullable',
            'dl' => 'boolean',
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
        ])
        );
    }
}
