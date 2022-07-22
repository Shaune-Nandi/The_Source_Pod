<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Podcast;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_register(){
        return view('users.authentication.register');
    }

    public function authenticate_register(){
        $registerDetails = request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed'            
        ]);
        $registerDetails['password'] = bcrypt($registerDetails['password']);
        $registerDetails['role_id'] = 2;
        
        $user = User::create($registerDetails);
        auth()->login($user);
        return redirect('/home')->with('success', 'Registration successfull');
    }

    public function show_login(){
        return view('users.authentication.login');
    }

    public function authenticate_login(User $user){
        $loginDetails = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(auth()->attempt($loginDetails)){
            session()->regenerate();
            $role_id = auth()->user()->role_id;
            if($role_id == 1){
                return redirect('/admin_dashboard')->with('success', 'welcome back');
            }
            return redirect('/')->with('success', 'welcome back');
        }
        else{
            return redirect('/login');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'You have logged out successfully');
    }

    public function show_user_personal_information($user){
        $user = User::find($user);
        return view('users.subscribers.personal_information', ['user' => $user]);
    }

    public function save_user_personal_information(Request $request, User $user){
        request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]);
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);
        $user->touch();
        return redirect('/home')->with('success', 'Your personal details have been updated successfully');        
    }

    public function show_user_library(){
        return view('users.subscribers.library');
    }

    public function show_user_membership(){
        return view('users.subscribers.membership');
    }
    
    public function show_admin_dashboard(){
        $podcast = Podcast::orderBy('created_at', 'DESC')->get();
        return view('users.admins.dashboard', compact('podcast'));
    }

}
