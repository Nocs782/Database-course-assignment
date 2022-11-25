<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\DiseaseTypeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PublicServantController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SpecializeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect()->route('disease-type.index');
});

Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('users/{email}', [UserController::class, 'edit'])->name('user.edit');
Route::post('users/save', [UserController::class, 'save'])->name('user.save');
Route::post('users/delete', [UserController::class, 'delete'])->name('user.delete');

Route::get('dtypes', [DiseaseTypeController::class, 'index'])->name('disease-type.index');
Route::get('dtypes/{id}', [DiseaseTypeController::class, 'edit'])->name('disease_types.edit');
Route::post('dtypes/save', [DiseaseTypeController::class, 'save'])->name('disease_types.save');
Route::post('dtypes/delete', [DiseaseTypeController::class, 'delete'])->name('disease_types.delete');

Route::get('strany', [CountryController::class, 'index'])->name('countries.index');
Route::get('strany/{cname}', [CountryController::class, 'edit'])->name('countries.edit');
Route::post('strany/save', [CountryController::class, 'save'])->name('countries.save');
Route::post('strany/delete', [CountryController::class, 'delete'])->name('countries.delete');

Route::get('dis', [DiseaseController::class, 'index'])->name('diseases.index');
Route::get('dis/{disease_code}', [DiseaseController::class, 'edit'])->name('diseases.edit');
Route::post('dis/save', [DiseaseController::class, 'save'])->name('diseases.save');
Route::post('dis/delete', [DiseaseController::class, 'delete'])->name('diseases.delete');

Route::get('discover', [DiscoverController::class, 'index'])->name('discoveries.index');
Route::get('discover/{cname}', [DiscoverController::class, 'edit'])->name('discoveries.edit');
Route::post('discover/save', [DiscoverController::class, 'save'])->name('discoveries.save');
Route::post('discover/delete', [DiscoverController::class, 'delete'])->name('discoveries.delete');


Route::get('pservs', [PublicServantController::class, 'index'])->name('public_servants.index');
Route::get('pservs/{email}', [PublicServantController::class, 'edit'])->name('public_servants.edit');
Route::post('pservs/save', [PublicServantController::class, 'save'])->name('public_servants.save');
Route::post('pservs/delete', [PublicServantController::class, 'delete'])->name('public_servants.delete');

Route::get('docs', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('docs/{email}', [DoctorController::class, 'edit'])->name('doctors.edit');
Route::post('docs/save', [DoctorController::class, 'save'])->name('doctors.save');
Route::post('docs/delete', [DoctorController::class, 'delete'])->name('doctors.delete');


Route::get('recs', [RecordController::class, 'index'])->name('records.index');
Route::get('recs/{email}', [RecordController::class, 'edit'])->name('records.edit');
Route::post('recs/save', [RecordController::class, 'save'])->name('records.save');
Route::post('recs/delete', [RecordController::class, 'delete'])->name('records.delete');

Route::get('specs', [SpecializeController::class, 'index'])->name('specializations.index');
Route::get('specs/{email}', [SpecializeController::class, 'edit'])->name('specializations.edit');
Route::post('specs/save', [SpecializeController::class, 'save'])->name('specializations.save');
Route::post('specs/delete', [SpecializeController::class, 'delete'])->name('specializations.delete');
