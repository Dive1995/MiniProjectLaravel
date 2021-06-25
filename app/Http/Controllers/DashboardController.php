<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Allusers;
use App\Models\Feedback;

use Illuminate\Support\Facades\DB;




class DashboardController extends Controller
{
    public function index(){
        $users = Allusers::all();

        if(Auth::user()->hasRole('user')){
            $user = Allusers::where('ceb',Auth::user()->ceb)->first();
            return view('/myceb',['user'=>$user]);
        }elseif(Auth::user()->hasRole('admin')){
            return view('/dashboard',['users' => $users]);
        }
    }

    // user apply for new request
    public function newrequest(){
        return view('newrequest');
    }

    public function feedback(){

        // $feedback = DB::table('feedback')
        //     ->join('users', 'users.id', '=', 'feedback.userID')
        //     ->select('feedback.*', 'users.name')
        //     ->get();

        // $feedback = Feedback::join('allusers', 'feedback.userID', '=', 'allusers.id')
        //        ->get(['feedback.*', 'allusers.lname']);
        // error_log($feedback);

        $feedback = Feedback::all();
        return view('userfeedback',['feedback'=>$feedback]);
    }

    public function updatereading(){
        $users = Allusers::where('hasAccount','no')->get();
        // $users = Allusers::all();
        return view('updatereading',['users' => $users]);
    }
}