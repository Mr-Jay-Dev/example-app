<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserForm;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\UserTable;

Route::get('', function () {
    return view('page.usersignin');
});



// Route::get('/adduser', 'App\Http\Controllers\UserController@addUser')->name('adduser');

// Route::get('/addUserData', 'App\Http\Controllers\UserController@addUserData')->name('addUserData');
// Route::post('/addUserData','App\Http\Controllers\UserController@addUserData');

// Route::get('/addTable', 'App\Http\Controllers\UserController@addTable')->name('addTable');

// Route::get('/editUser', 'App\Http\Controllers\UserController@editUser')->name('editUser');

// Route::get('/dataFetch', 'App\Http\Controllers\UserController@dataFetch');

// Route::get('/edit/{id}', 'App\Http\Controllers\UserController@edit');

// Route::put('/update/{id}', 'App\Http\Controllers\UserController@update');


// Route for showing the form to add a new user

// Route for displaying the add user form
Route::get('/adduser', [UserController::class, 'addUser'])->name('adduser');

// Route for displaying the user table
Route::get('/dataFetch', [UserController::class, 'dataFetch'])->name('dataFetch');

// Route for displaying the edit form
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');




// Route::get('/upload', [CampaignController::class, 'store'])->name('upload');


Route::post('/campaigns/upload-avatar', [CampaignController::class, 'store'])->name('campaigns.upload-avatar');

Route::get('/listing', [CampaignController::class, 'index'])->name('listing');

Route::get('/edit/{id}', [CampaignController::class, 'edit'])->name('edit-listing');


// Route for handling form submission to add user data
Route::post('/adduserdata', [UserController::class, 'addUserData'])->name('adduserdata');


// Route for displaying the sign-up form
Route::get('/signup', [UserRegistration::class, 'signUp'])->name('signUp');
Route::post('/signup/store', [UserRegistration::class, 'store'])->name('store');
Route::get('/signin', [UserRegistration::class, 'signIn'])->name('signIn');
Route::post('/signin/login', [UserRegistration::class, 'login'])->name('login');

Route::get('dashboard', [UserRegistration::class, 'dashboard']); 

// Route for handling form submission to update user data
Route::put('/update/{id}', [UserController::class, 'update'])->name('update');

Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');



// Route::get('/addUserForm', 'App\Http\Controllers\UserForm@addUserForm')->name('addUserForm');
// Route::post('/addUserForm', [UserForm::class,'addUserForm']);
