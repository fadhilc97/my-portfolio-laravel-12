<?php

use Laravel\Fortify\Features;
use App\Livewire\Landing\Home;
use App\Livewire\Landing\Project;
use App\Livewire\Landing\Experience;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/experience', Experience::class);
Route::get('/project', Project::class);

Route::get('/blog', function() {
  return view ('blog');
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
