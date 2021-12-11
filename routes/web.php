<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\website\HomeController;
use App\Models\Cause;
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

// Route::group(['prefix'=>'admin'],function (){
//     Route::get('/', function () {
//         return view('admin.master');
//     })->name('home');
// })

// Route::get('/', function () {
//     return view('website.fixed.home');
// })->name('website');

//website route
//Route::get('/',[HomeController::class,'ShowCrisis']);

 Route::get('/',[HomeController::class,'Home']);



//Donor
Route::get('/create/donation', [HomeController::class, 'CreateDonation'])->name('create.donation');
Route::get('/create/donor',[HomeController::class,'CreateDonor'])->name('create.donor');

//volunteer
Route::get('/create/volunteer',[VolunteerController::class,'CreateVolunteer'])->name('create.volunteer');






Route::group(['prefix'=>'admin'],function (){
    Route::get('/', function () {
        return view('master');
    })->name('home');


// Route::get('/', function () {
//     return view('master');
// });



//for AdminController
Route::get('/cause',[AdminController::class, 'Cause'])->name('cause');
Route::get('/create/cause', [AdminController::class, 'CreateCause'])->name('create.cause');
Route::get('/show/cause',[AdminController::class,'ShowCause'])->name('show.cause');
Route::post('/store/cause',[AdminController::class, 'StoreCause'])->name('store.cause');


//For DonorController
Route::get('/donation', [DonorController::class, 'Donation'])->name('donation');
Route::post('/store/donation',[DonorController::class, 'StoreDonation'])->name('store.donation');
Route::get('/donorprofile', [DonorController::class, 'DonorProfile'])->name('donor.profile');
// Route::get('/create/donor',[DonorController::class,'CreateDonor'])->name('create.donor');
Route::post('store/donor',[DonorController::class,'StoreDonor'])->name('store.donor');
// Route::get('/distribution',VolunteerController::class, 'Distribution')->name('distribution');

//For VolunteerController
Route::get('/volunteerprofile',[VolunteerController::class, 'VolunteerProfile'])->name('volunteer.profile');
// Route::get('/create/volunteer',[VolunteerController::class,'CreateVolunteer'])->name('create.volunteer');
Route::post('/store/volunteer',[VolunteerController::class,'StoreVolunteer'])->name('store.volunteer');


//For CategoryController
Route::get('/create/category',[CategoryController::class,'CreateCategory'])->name('create.category');
Route::get('/category/list',[CategoryController::class,'CategoryList'])->name('category.list');
Route::post('/store/category',[CategoryController::class,'StoreCategory'])->name('store.category');
});