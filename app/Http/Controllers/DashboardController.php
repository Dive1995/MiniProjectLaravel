<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Allusers;



class DashboardController extends Controller
{
    public function index(){
        $users = Allusers::all();

        if(Auth::user()->hasRole('user')){
            return view('/myceb');
        }elseif(Auth::user()->hasRole('admin')){
            return view('/dashboard',['users' => $users]);
        }
    }

    public function newrequest(){
        return view('newrequest');
    }

    public function feedback(){
        return view('userfeedback');
    }
}