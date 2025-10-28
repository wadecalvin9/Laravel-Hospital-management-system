<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    // Show all appointments
    public function index()
    {
        $appointments = Appointment::with(['user', 'doctor'])->get();
        return view('dashboard.appointments.index', compact('appointments'));
    }

    // Show create form
    public function create()
    {
        $patients = User::all();
        $doctors = Doctor::all();
        return view('dashboard.appointments.create', compact('patients', 'doctors'));
    }

    // Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'nullable',
            'status' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        Appointment::create($request->all());

        return redirect('/appointments')->with('success', 'Appointment created successfully!');
    }

    // Edit form
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $patients = User::all();
        $doctors = Doctor::all();
        return view('dashboard.appointments.edit', compact('appointment', 'patients', 'doctors'));
    }

    // Update record
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update($request->all());

        return redirect('/appointments')->with('success', 'Appointment updated successfully!');
    }

    // Delete record
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect('/appointments')->with('success', 'Appointment deleted successfully!');
    }
}
