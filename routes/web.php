<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\VolunteerController;
use App\Models\Crisis;
use App\Models\Donation;
use App\Models\Volunteer;
use App\Models\Category;

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
    return view('master');
});


//for AdminController
Route::get('/crisis',[AdminController::class, 'Crisis']);
Route::get('/create/crisis', [AdminController::class, 'CreateCrisis']);
Route::get('/show/crisis',[AdminController::class,'ShowCrisis'])->name('show.crisis');
Route::post('/store/crisis',[AdminController::class, 'StoreCrisis'])->name('store.crisis');


//For DonorController
Route::get('/donation', [DonorController::class, 'Donation']);
Route::get('/create/donation', [DonorController::class, 'CreateDonation']);
Route::post('/store/donation',[DonorController::class, 'StoreDonation'])->name('store.donation');
Route::get('/donorprofile', [DonorController::class, 'DonorProfile'])->name('donor.profile');
Route::get('/create/donor',[DonorController::class,'CreateDonor'])->name('create.donor');
Route::post('store/donor',[DonorController::class,'StoreDonor'])->name('store.donor');
// Route::get('/distribution',VolunteerController::class, 'Distribution')->name('distribution');

//For VolunteerController
Route::get('/volunteerprofile',[VolunteerController::class, 'VolunteerProfile'])->name('volunteer.profile');
Route::get('/create/volunteer',[VolunteerController::class,'CreateVolunteer'])->name('create.volunteer');
Route::post('/store/volunteer',[VolunteerController::class,'StoreVolunteer'])->name('store.volunteer');


//For CategoryController
Route::get('/create/category',[CategoryController::class,'CreateCategory'])->name('create.category');
Route::get('/category/list',[CategoryController::class,'CategoryList'])->name('category.list');
Route::post('/store/category',[CategoryController::class,'StoreCategory'])->name('store.category');
