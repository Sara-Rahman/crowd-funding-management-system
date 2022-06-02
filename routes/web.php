<?php

use App\Http\Controllers\Admin\MailController;
use App\Models\Cause;
use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VolunteerController;
// use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\UserController;
use App\Http\Controllers\website\ExpenseController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\admin\UserController as AdminUserController;
// use App\Models\Category;

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



// Route::get('/', function () {
//     return view('website.fixed.home');
// })->name('website');

//website route
//Route::get('/',[HomeController::class,'ShowCrisis']);

//WEBSITE
 Route::get('/',[HomeController::class,'Home'])->name('website');
 
 //user controller

 Route::get('/create/donor',[HomeController::class,'CreateDonor'])->name('create.donor');
 Route::post('store/donor',[UserController::class,'StoreDonor'])->name('store.donor');
 Route::post('/donor/login',[UserController::class,'DonorLogin'])->name('donor.login'); 
 Route::get('/donor/logout',[UserController::class,'DonorLogout'])->name('donor.logout');


//HomeController update Volunteer profile
Route::get('/profile/volunteer/list', [HomeController::class, 'profileOfVolunteer'])->name('profile.volunteer.list');
Route::post('/profile/update/volunteer',[HomeController::class,'updateProfileVolunteer'])->name('update.volunteer.profile');

//Donor registration form
Route::get('/create/donation/{id}', [HomeController::class, 'CreateDonation'])->name('create.donation');
//For DonorController

Route::post('/store/donation/{id}',[DonorController::class, 'StoreDonation'])->name('store.donation');
Route::get('/details/donation',[HomeController::class,'DonationDetails'])->name('details.donation');

// update donor profile on website
Route::get('/profile/donor',[HomeController::class,'profileOfDonor'])->name('profile.donor');
// Route::get('/profile/donor',[HomeController::class,'profileOfDonor2'])->name('profile.donor2');
Route::put('/profile/update',[HomeController::class,'update'])->name('update.donor');
//update donor password
Route::get('/update/pass/donor',[HomeController::class,'updatePassDonor'])->name('update.pass.donor');
Route::post('/store/update/pass/donor',[HomeController::class,'storePasswordform'])->name('store.pass.donor');


// Route::get('/create/donor',[HomeController::class,'CreateDonor'])->name('create.donor');
Route::get('/cause/details/{cause_id}',[HomeController::class,'CauseDetails'])->name('cause.details');



//volunteer
Route::get('/create/volunteer',[VolunteerController::class,'CreateVolunteer'])->name('create.volunteer');
Route::post('/store/volunteer',[VolunteerController::class,'StoreVolunteer'])->name('store.volunteer');


//update volunteer pass
Route::get('/update/pass/volunteer',[HomeController::class,'updatePassVolunteer'])->name('update.pass.volunteer');
Route::post('/store/update/pass/volunteer',[HomeController::class,'storePasswordformVolunteer'])->name('store.pass.volunteer');


//Assigned volunteer list
Route::get('/assigned/list/profile',[HomeController::class,'AssignedList'])->name('assigned.list');


//create and store expenses
Route::get('/create/expense/{id}',[VolunteerController::class,'createExpense'])->name('create.expense');
Route::post('/store/expense',[VolunteerController::class,'storeExpense'])->name('store.expense');

//view expense
Route::get('vol/view/expense/{id}',[VolunteerController::class,'volViewExpense'])->name('vol.view.expense');


//contact us
Route::get('/contact',[HomeController::class,'Contact'])->name('contact');


//Expense controller
Route::get('/view/expenses/donor/{id}',[ExpenseController::class,'viewExpense'])->name('donor.view.expense');


// ADMIN
Route::get('/login',[AdminUserController::class,'login'])->name('admin.login');
Route::post('/checkin',[AdminUserController::class,'checkIn'])->name('admin.checkin');

//middleware added
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', function () {
        return view('master');
    })->name('home');

    Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Route::get('/', function () {
//     return view('master');
// });




//for AdminController(Cause)
Route::get('/cause',[AdminController::class, 'Cause'])->name('cause');
Route::get('/create/cause', [AdminController::class, 'CreateCause'])->name('create.cause');
Route::get('/show/cause',[AdminController::class,'ShowCause'])->name('show.cause');
Route::post('/store/cause',[AdminController::class, 'StoreCause'])->name('store.cause');
Route::get('/cause/view/details/{cause_id}',[AdminController::class,'CauseView'])->name('view.cause');
Route::get('/cause/edit/{cause_id}',[AdminController::class,'CauseEdit'])->name('cause.edit');
Route::put('/cause/update/{cause_id}',[AdminController::class,'CauseUpdate'])->name('cause.update');
Route::get('/cause/delete/{cause_id}',[AdminController::class,'CauseDelete'])->name('delete.cause');
Route::get('/assign/volunteer/{cause_id}',[AdminController::class,'AssignVolunteer'])->name('assign.volunteer');
Route::post('/assign/volunteer/post/{cause_id}',[AdminController::class,'storeAssignVolunteer'])->name('store.assign.volunteer');
Route::get('/assign/volunteer/view/{cause_id}',[AdminController::class,'viewAssignVolunteer'])->name('view.assign.volunteer');

//expense
Route::get('/cause/expense/{cause_id}',[AdminController::class,'viewCauseExpense'])->name('view.cause.expense');
Route::get('/edit/cause/expense/{cause_id}',[AdminController::class,'editCauseExpense'])->name('edit.cause.expense');
Route::put('/update/cause/expense/{cause_id}',[AdminController::class,'updateCauseExpense'])->name('update.cause.expense');
Route::get('/delete/cause/expense/{cause_id}',[AdminController::class,'deleteCauseExpense'])->name('delete.cause.expense');

// Report
Route::get('/report',[AdminController::class,'report'])->name('report');



//for DonorController
Route::get('/donation', [DonorController::class, 'Donation'])->name('donation');
Route::get('/donorprofile', [UserController::class, 'DonorProfile'])->name('donor.profile');
// Route::get('/create/donor',[DonorController::class,'CreateDonor'])->name('create.donor');
// Route::post('store/donor',[DonorController::class,'StoreDonor'])->name('store.donor');
// Route::get('/distribution',VolunteerController::class, 'Distribution')->name('distribution');
Route::get('/view/donation/{donation_id}',[DonorController::class,'DonationView'])->name('view.donation');
Route::get('/delete/donation/{donation_id}',[DonorController::class,'DonationDelete'])->name('delete.donation');
Route::get('/view/donorprofile/{donor_id}',[UserController::class,'DonorView'])->name('view.donorprofile');
Route::get('/donor/edit/{donor_id}',[UserController::class,'DonorEdit'])->name('edit.donor');
Route::put('/donor/update/{donor_id}',[UserController::class,'DonorUpdate'])->name('update.donor.profile');
Route::get('/delete/donorprofile/{donor_id}',[UserController::class,'DonorDelete'])->name('delete.donorprofile');
// Route::post('/update/donation/status/{donation_id}',[DonorController::class,'UpdateDonationStatus'])->name('update.donation.status');

//For VolunteerController
Route::get('/volunteerprofile',[VolunteerController::class, 'VolunteerProfile'])->name('volunteer.profile');
// Route::get('/create/volunteer',[VolunteerController::class,'CreateVolunteer'])->name('create.volunteer');
Route::get('/volunteer/edit/{volunteer_id}',[VolunteerController::class,'VolunteerEdit'])->name('edit.volunteer');
Route::put('/volunteer/update/{volunteer_id}',[VolunteerController::class,'uVolunteerUpdate'])->name('update.volunteer');
Route::get('/view/volunteerprofile/{volunteer_id}',[VolunteerController::class,'VolunteerView'])->name('view.volunteer');
Route::get('/delete/volunteerprofile/{volunteer_id}',[VolunteerController::class,'VolunteerDelete'])->name('delete.volunteer');
Route::get('/distribution',[VolunteerController::class,'Distribution'])->name('distribution');


//For CategoryController
Route::get('/create/category',[CategoryController::class,'CreateCategory'])->name('create.category');
Route::get('/category/list',[CategoryController::class,'CategoryList'])->name('category.list');
Route::post('/store/category',[CategoryController::class,'StoreCategory'])->name('store.category');
Route::get('/category/edit/{category_id}',[CategoryController::class,'editCategory'])->name('edit.category');
Route::put('/category/update/{category_id}',[CategoryController::class,'updateCategory'])->name('update.category');
Route::get('/category/delete/{category_id}',[CategoryController::class,'deleteCategory'])->name('delete.category');

});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2/{id}', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('payment');

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

// for sending mail
Route::get('/send-email',[SslCommerzPaymentController::class, 'success']);