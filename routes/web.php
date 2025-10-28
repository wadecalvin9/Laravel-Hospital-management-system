<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientsController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🏠 Home
Route::get('/', function () {
    return view('welcome');
})->name('home');


// 📊 Dashboard
Route::get('/dash', [AnalyticsController::class, 'analytics'])->name('analytics');



// =====================================================================
// 🧍 Patients Routes
// =====================================================================
Route::prefix('patients')->group(function () {
    Route::get('/', [PatientsController::class, 'getallpatients'])->name('patients.index');
    Route::delete('/{id}', [PatientsController::class, 'destroy'])->name('patients.destroy');

    Route::get('/add', function () {
        return view('dashboard.patients.add');
    })->name('patients.add');

    Route::post('/create', [PatientsController::class, 'create'])->name('patients.create');

    Route::get('/edit/{id}', function ($id) {
        $patient = User::findOrFail($id);
        return view('dashboard.patients.edit', compact('patient'));
    })->name('patients.edit');

    Route::put('/modify/{id}', [PatientsController::class, 'modify'])->name('patients.modify');
});


// =====================================================================
// 👨‍⚕️ Doctors Routes
// =====================================================================
Route::prefix('doctors')->group(function () {
    Route::get('/', [DoctorController::class, 'index'])->name('doctors.index');

    Route::get('/new', function () {
        return view('dashboard.doctors.add');
    })->name('doctors.add');

    Route::post('/create', [DoctorController::class, 'create'])->name('doctors.create');

    Route::get('/edit/{id}', function ($id) {
        $doctor = Doctor::findOrFail($id);
        return view('dashboard.doctors.edit', compact('doctor'));
    })->name('doctors.edit');

    Route::put('/modify/{id}', [DoctorController::class, 'update'])->name('doctors.modify');
    Route::delete('/{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
});


/////


use App\Http\Controllers\AppointmentController;

Route::prefix('appointments')->group(function () {
    // List all appointments
    Route::get('/', [AppointmentController::class, 'index'])->name('appointments.index');

    // Show add form (loads doctors & patients)
    Route::get('/add', [AppointmentController::class, 'create'])->name('appointments.add');

    // Store new appointment
    Route::post('/store', [AppointmentController::class, 'store'])->name('appointments.store');

    // Show edit form
    Route::get('/edit/{id}', [AppointmentController::class, 'edit'])->name('appointments.edit');

    // Update appointment
    Route::put('/update/{id}', [AppointmentController::class, 'update'])->name('appointments.update');

    // Delete appointment
    Route::delete('/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
});




// =====================================================================
// ⚙️ Settings & User Profile Routes
// =====================================================================
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            )
        )
        ->name('two-factor.show');
});


// =====================================================================
// 🧭 Miscellaneous
// =====================================================================

// Dashboard view
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// 404 Fallback
Route::fallback(function () {
    return response()->view('404', [], 404);
});
