<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allusers;

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
        $allusers->hasAccount = false;
        $allusers->save();


        $users = Allusers::all();
        return view('/dashboard',['users' => $users]);
    }
}
