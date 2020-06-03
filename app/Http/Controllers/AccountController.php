<?php

namespace App\Http\Controllers;

use App\Main;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Laracsv

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
        return redirect()->route('profile')->with('success', 'Good, your profile successfully updated !');
    }

    public function changeEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|confirmed|email'
        ]);
        $user = User::find(Auth::user()->id);
        if ($user == null) {
            return redirect()->back()->with('fail', 'There is an error ! User data not found !')->withInput();
        }
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile')->with('success', 'Good, your email successfully changed !');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed'
        ]);
        $user = User::find(Auth::user()->id);
        if ($user == null) {
            return redirect()->back()->with('fail', 'There is an error ! User data not found !')->withInput();
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('profile')->with('success', 'Good, your password successfully changed !');
    }

    public function exportData(Request $request)
    {
        $request->validate(
            [
                'storage' => 'required|numeric'
            ],
            [
                'storage.required' => 'Pilih storage terlebih dahulu untuk mengekspor data',
                'storage.numeric' => 'Pilih salah satu storage yang tersedia'
            ]
        );

        switch ($request->storage) {
            case '1':
                $storageName = 'MS1';
                break;
            case '2':
                $storageName = 'ExternalHardisk';
                break;
            case '3':
                $storageName = 'Laptop';
                break;
            case '4':
                $storageName = 'Else';
                break;
            default:
                $storageName = 'Unknown';
                break;
        }

        $fileName = 'exported_anime_data_' . $storageName . '_storage_' . Carbon::now()->toDateTimeString() . '.csv';
        $table = Main::where('storage_device', $request->storage)->get();
        $csvExporter = new \Laracsv\Export();
        return $csvExporter->build(
            $table,
            [
                'ain',
                'title',
                'episode',
                'type',
                'status',
                'download_status',
                'resolution',
                'storage_device',
                'note'
            ]
        )->download($fileName);
    }
}
