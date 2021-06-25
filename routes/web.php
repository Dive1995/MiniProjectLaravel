<?php

use Illuminate\Support\Facades\Route;
use App\Models\Feedback;
use App\Models\Billings;
use App\Models\Newuser;
use App\Models\Allusers;
use Illuminate\Support\Facades\Auth;

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
    // $feedback->userID = '2';
    // $feedback->userID = Auth::user()->id;

    $feedback->save();

    return redirect('/')->with('msg','Thank you for your feedback.');
});




// auth route for user and admin

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::group(['middleware' => ['auth','role:user']], function(){
//     Route::get('/myceb','App\Http\Controllers\DashboardController@myceb')->name('myceb');
// });


Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});


// users (myceb)
Route::group(['middleware' => ['auth']], function(){
    // Route::get('/myceb', function(){
    //     // return view('myceb');
    //     $user = Allusers::where('ceb',Auth::user()->ceb)->first();
    //     return view('/myceb',['user'=>$user]);
    // });
        
    // if(Auth::hasRole('user'))

    Route::post('/dashboard', function(){
        $billing = new Billings();
    
        $billing->last_reading = request('last_reading');
        $billing->reading = request('reading');
        $billing->userID = request('ceb');
        $billing->connection_type = request('type');

        error_log($billing);
    
    });
});

// admin roles

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/newrequest','App\Http\Controllers\DashboardController@newrequest')->name('dashboard.newrequest');
    Route::get('/dashboard/userfeedback','App\Http\Controllers\DashboardController@feedback')->name('dashboard.userfeedback');
    Route::get('/dashboard/updatereading','App\Http\Controllers\DashboardController@updatereading')->name('dashboard.updatereading');
    // Route::get('/dashboard','App\Http\Controllers\UserController@displayusers');
    Route::post('/dashboard','App\Http\Controllers\UserController@addusers');
});




require __DIR__.'/auth.php';


