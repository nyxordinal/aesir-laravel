<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function displayProfile()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
        ]);

        $user = User::find(Auth::user()->id);
        if ($user == null) {
            return redirect()->back()->with('fail', 'There is an error ! User data not found !')->withInput();
        }
        $user->name = $request->name;
        $user->job = $request->job;
        $user->save();
        return redirect()->route('profile')->with('success','Good, your profile successfully updated !');
    }

    public function changeEmail(Request $request)
    {
        $request->validate([
            'email'=>'required|confirmed|email'
        ]);
        $user = User::find(Auth::user()->id);
        if ($user == null) {
            return redirect()->back()->with('fail', 'There is an error ! User data not found !')->withInput();
        }
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile')->with('success','Good, your email successfully changed !');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password'=>'required|min:8|confirmed'
        ]);
        $user = User::find(Auth::user()->id);
        if ($user == null) {
            return redirect()->back()->with('fail', 'There is an error ! User data not found !')->withInput();
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('profile')->with('success','Good, your password successfully changed !');
    }
}
