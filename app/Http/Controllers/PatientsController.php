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


}
