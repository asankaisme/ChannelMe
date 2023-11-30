<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::where('isActive', 1)->get();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'max:100', 'min:2'],
            'lname' => ['required', 'max:100', 'min:2'],
        ]);
        $newPatient = Patient::create($request->input());
        //dd($newPatient);
        if ($newPatient != null)
            return redirect()->route('patients.show', $newPatient->id)->with('isSuccess', 'New patient record added succefully.');
            //dd($newPatient->id);
        else {
            return redirect()->route('patients.index')->with('isFailed', 'Failed to add details!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::where('id', $id)->first();
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
