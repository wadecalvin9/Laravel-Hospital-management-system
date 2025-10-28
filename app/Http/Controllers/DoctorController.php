<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('dashboard.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $incomming_data  = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'specialization' => 'required',
            'gender' => 'required',


        ]);
        Doctor::create($incomming_data);
        return redirect(route('doctors.index'))->with('success','Doctor added Successfully');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $incomming_data  = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'specialization' => 'required',
            'gender' => 'required',


        ]);
        $doctor = Doctor::findOrFail($id);
        $doctor->update($incomming_data);

        return redirect(route('doctors.index'))->with('success','Doctor Edited Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
         return redirect(route('doctors.index'))->with('success', 'Doctor deleted Successfully');
    }
}
