<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Permission;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Input;

use App\Models\Allusers;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        if(Allusers::where('ceb', '=', $request->input('ceb'))->first()){
            $request->validate([
                'name' => 'required|string|max:255',
                'ceb' => 'required|integer',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'ceb' => $request->ceb,
                'password' => Hash::make($request->password),
            ]);

            $createPost = Permission::create([
                'name' => 'create-post',
            ]);
    
            event(new Registered($user));

            $allusers = Allusers::where('ceb', '=', $request->input('ceb'))->first();

            $allusers->hasAccount = 'yes';
            $allusers->save();
    
            Auth::login($user);
            $user->attachRole('user');
            $user->attachPermission($createPost);

            

            return redirect(RouteServiceProvider::HOME);
        }
        else{
            return redirect('/register')->with('msg','Sorry the CEB Id you entered is invalid, please enter correct Id');
        }


        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'ceb' => 'required|integer',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'ceb'=> $request->ceb,
        //     'password' => Hash::make($request->password),
        // ]);

        // error_log($user);

        // event(new Registered($user));

        // Auth::login($user);
        // $user->attachRole('admin');

        // return redirect(RouteServiceProvider::HOME);
    }
}
