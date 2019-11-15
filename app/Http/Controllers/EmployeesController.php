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
}
