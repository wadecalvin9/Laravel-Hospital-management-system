<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function analytics()
{
    $patientsCount = User::count();
    $doctorsCount = Doctor::count();
    $appointmentsCount = Appointment::count();

    $statusCounts = [
        'pending' => Appointment::where('status', 'pending')->count(),
        'confirmed' => Appointment::where('status', 'confirmed')->count(),
        'completed' => Appointment::where('status', 'completed')->count(),
        'cancelled' => Appointment::where('status', 'cancelled')->count(),
    ];

    $recentAppointments = Appointment::with(['User', 'Doctor'])
        ->latest()
        ->take(5)
        ->get();

    return view('dashboard.index', compact(
        'patientsCount',
        'doctorsCount',
        'appointmentsCount',
        'statusCounts',
        'recentAppointments'
    ));
}
}
