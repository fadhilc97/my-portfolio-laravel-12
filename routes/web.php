<?php

use Laravel\Fortify\Features;
use App\Livewire\Landing\Blog;
use App\Livewire\Landing\Project;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Livewire\BlogPost\Blog as AppBlog;
use App\Livewire\BlogPost\Category;
use App\Livewire\BlogPost\CreateBlog;
use App\Livewire\BlogPost\EditBlog;
use App\Livewire\BlogPost\PreviewBlog;
use App\Livewire\Landing\BlogDetail;

Route::get('/', function() {
  return view ('home');
});
Route::get('/experience', function() {
  return view('experience');
});
Route::get('/project', Project::class);
Route::get('/blog', Blog::class);
Route::get('/blog/{post:slug}', BlogDetail::class);

Route::view('dashboard', 'dashboard')
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::middleware(['auth'])->group(function () {
  Route::get('app/blog', AppBlog::class)->name('app.blog');
  Route::get('app/blog/create', CreateBlog::class)->name('app.blog.create');
  Route::get('app/blog/{slug}/edit', EditBlog::class)->name('app.blog.edit');
  Route::get('app/blog/{slug}/preview', PreviewBlog::class)->name('app.blog.preview');
  Route::get('app/categories', Category::class)->name('app.categories');

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
