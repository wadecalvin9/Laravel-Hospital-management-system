<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PatientsController extends Controller
{
    public function getallpatients(){

        $patients = User::all();
        return view('dashboard.patients.index', compact('patients'));


    }

    public function destroy( Request  $request, $id){
        $patient = User::findOrFail($id);
        $patient->delete();
       return redirect(route('patients.index'))->with('success','Patient deleted Successfully');
    }

}
