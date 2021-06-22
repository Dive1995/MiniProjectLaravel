<?php

use Illuminate\Support\Facades\Route;
use App\Models\Feedback;
use App\Models\Billings;
use App\Models\Newuser;

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


// home screen
Route::get('/', function () {
    return view('welcome');
});



// myceb account
Route::get('/myceb', function(){
    return view('myceb');
});

Route::post('/myceb', function(){
    $billing = new Billings();

    $billing->last_reading = request('reading');

    $billing->save();
});



// new user
Route::get('/newcustomer',function(){
    return view('newCustomer');
});

Route::post('/newcustomer', function(){
    $newuser = new Newuser();

    $newuser->fname = request('fname');
    $newuser->lname = request('lname');
    $newuser->nic = request('nic');
    $newuser->phone = request('phone');
    $newuser->address = request('address');
    $newuser->gs_division = request('gs_division');
    $newuser->email = request('email');
    $newuser->type = request('type');
    
    $newuser->save();

    return redirect('/')->with('msg','Your request has been made successfully !!');
});


// feedback
Route::get('/feedback', function(){
    return view('feedback');
});


Route::post('/feedback', function(){
    // error_log(request('title'));
    // error_log(request('subject'));

    $feedback = new Feedback();

    $feedback->title = request('title');
    $feedback->subject = request('subject');
    $feedback->userID = '2';

    $feedback->save();

    return redirect('/')->with('msg','Thank you for your feedback.');
});




// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


