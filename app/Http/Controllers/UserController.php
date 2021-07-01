<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allusers;
use App\Models\Billings;

class UserController extends Controller
{
    // add users manually
    public function addusers(){
        $allusers = new Allusers();

        $allusers->fname = request('fname');
        $allusers->lname = request('lname');
        $allusers->nic = request('nic');
        $allusers->phone = request('phone');
        $allusers->address = request('address');
        $allusers->type = request('type');
        $allusers->reading = request('reading');
        $allusers->balance = request('balance');
        $allusers->ceb = request('ceb');
        $allusers->hasAccount = 'no';
        $allusers->save();


        $users = Allusers::all();
        return redirect('/dashboard')->with('users',$users);
    }

    public function billing(){
        
        $billing = new Billings();
    
        $billing->last_reading = request('last_reading');
        $billing->reading = request('reading');
        $billing->userID = request('ceb');
        $billing->connection_type = request('type');
        error_log('hi');
        error_log($billing);
        return redirect('/dashboard');
    }
}
