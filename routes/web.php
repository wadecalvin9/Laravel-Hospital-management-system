<?php

use App\Http\Controllers\PatientsController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/dash', function(){
    return view('dashboard.index');
});
//patients routes
Route::get('/patients', [PatientsController::class,'getallpatients'])->name('patients.index');
Route::delete('/patients/{id}', [PatientsController::class, 'destroy'])->name('patients.destroy');
Route::get('/patientedit/{id}', function($id){
    $patient = User::findOrFail($id);
    return view('dashboard.patients.edit', compact('patient'));
})->name('patients.edit');

Route::put('/patientmodify/{id}', [PatientsController::class,'modify'])->name('patients.modify');

Route::get('/patientsadd', function(){
    return view ('dashboard.patients.add');
} );
//end





Route::get('/doctors', function(){
    return view('dashboard.doctors.index');
});

Route::fallback(function () {
    return response()->view('404', [], 404);
});



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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
            ),
        )
        ->name('two-factor.show');
});
