<?php

use App\Http\Controllers\Auth\TwoFaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EmployeController;
use App\Http\Livewire\Empolye\FamilyInformation;
use App\Http\Livewire\Admin\AuditTrails;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Roles\Edit;
use App\Http\Livewire\Admin\Roles\Roles;
use App\Http\Livewire\Admin\Permissions\Permissions;
use App\Http\Livewire\Admin\SentEmails\SentEmails;
use App\Http\Livewire\Admin\SentEmails\SentEmailsBody;
use App\Http\Livewire\Admin\Settings\Settings;
use App\Http\Livewire\Admin\Users\EditUser;
use App\Http\Livewire\Admin\Users\ShowUser;
use App\Http\Livewire\Admin\Users\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', WelcomeController::class);
Route::get('employe/', [EmployeController::class,'index'])->name('employe');;
Route::post('employe/personal_infor', [EmployeController::class,'store_personal'])->name('employe.store_personal');
Route::get('employe/family_infor/{id}', [EmployeController::class,'show_f'])->name('employe.family_infor');
//Route::get('employe/employe_work/{id}', [EmployeController::class,'show_w'])->name('employe.employe_work');
Route::get('employe/employe_work/{id}', [EmployeController::class,'show_w'])->name('employe.employe_work');
Route::get('employe/employe_service/{id}', [EmployeController::class,'show_s'])->name('employe.employe_service');
Route::get('employe/employe_markes/{id}', [EmployeController::class,'show_m'])->name('employe.employe_markes');
Route::get('employe/employe_request/{id}', [EmployeController::class,'show_r'])->name('employe.employe_requests');
Route::get('employe/employe_review/{id}', [EmployeController::class,'show_s_r'])->name('employe.employe_submit_review');
Route::get('employe/pdfDownload/{id}', [EmployeController::class,'pdfDownload'])->name('employe.pdfDownload');
Route::get('/get-districts/{id}', [EmployeController::class, 'getDistricts'])->name('get.Districts');
Route::get('/get-dSDivisions/{id}', [EmployeController::class, 'getDSDivisions'])->name('get.DSDivisions');
//Route::post('employe/family_infor', [FamilyInformation::class,'render'])->name('employe.family_infor');

Route::prefix(config('admintw.prefix'))->middleware(['auth', 'verified', 'activeUser', 'IpCheckMiddleware'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    Route::get('2fa', [TwoFaController::class, 'index'])->name('2fa');
    Route::post('2fa', [TwoFaController::class, 'update'])->name('2fa.update');
    Route::get('2fa-setup', [TwoFaController::class, 'setup'])->name('2fa-setup');
    Route::post('2fa-setup', [TwoFaController::class, 'setupUpdate'])->name('2fa-setup.update');

    Route::prefix('settings')->group(function () {
        Route::get('audit-trails', AuditTrails::class)->name('admin.settings.audit-trails.index');
        Route::get('system-settings', Settings::class)->name('admin.settings');
        Route::get('roles', Roles::class)->name('admin.settings.roles.index');
        Route::get('roles/{role}/edit', Edit::class)->name('admin.settings.roles.edit');
        Route::get('pesmissions', Permissions::class)->name('admin.settings.permissions.index');
        Route::get('pesmissions/{permission}/edit', Permissions::class)->name('admin.settings.permissions.edit');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', Users::class)->name('admin.users.index');
        Route::get('{user}/edit', EditUser::class)->name('admin.users.edit');
        Route::get('{user}', ShowUser::class)->name('admin.users.show');
    });
});

require __DIR__.'/auth.php';
