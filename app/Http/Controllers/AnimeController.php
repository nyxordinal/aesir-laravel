<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimeController extends Controller
{
    public function viewCreateAnimePage()
    {
        return view('create');
    }

    public function createAnime(Request $req)
    {
        if (($req->downstatus != 1 && $req->downstatus != 2) && ($req->resolution != 0 || $req->storage != 0)) {
            return back()->with('download-alert', 'Before you can set Resolution and Storage Device, please set Download Status to "On Process" or "Completed"')->withInput();
        }

        $rules = [
            'title' => 'required',
        ];

        $customMessages = [
            'required' => 'Please provide an anime title !',
        ];

        $this->validate($req, $rules, $customMessages);

        $user = Auth::user();

        // Check anime data existence
        if ($user->animes()->where('title', $req->title)->count()) {
            return back()->with('download-alert', 'Anime with the title "' . $req->title . '" already exist')->withInput();
        }

        $data = new Main;
        $data->title = $req->title;
        $data->genre = $req->genre;
        $data->episode = $req->episode;
        $data->airing_from = $req->airfrom;
        $data->airing_until = $req->airuntil;
        $data->type = $req->type;
        $data->status = $req->status;
        $data->download_status = $req->downstatus;
        $data->resolution = $req->resolution;
        $data->storage_device = $req->storage;
        $data->note = $req->note;
        $user->animes()->save($data);
        return redirect()->route('home')->with('anime-name', $data->title);
    }

    public function showAnimeDetail($id)
    {
        $data = Auth::user()->animes()->find($id);
        return view('edit', ['anime' => $data]);
    }

    public function updateAnime(Request $req, $id)
    {
        if (($req->downstatus != 1 && $req->downstatus != 2) && ($req->resolution != 0 || $req->storage != 0)) {
            return back()->with('download-alert', 'Before you can set Resolution and Storage Device, please set Download Status to "On Process" or "Completed"')->withInput();
        }

        $rules = [
            'title' => 'required',
        ];

        $customMessages = [
            'required' => 'Please provide an anime title !',
        ];

        $this->validate($req, $rules, $customMessages);

        $data = Auth::user()->animes()->find($id);
        $data->title = $req->title;
        $data->genre = $req->genre;
        $data->episode = $req->episode;
        $data->airing_from = $req->airfrom;
        $data->airing_until = $req->airuntil;
        $data->type = $req->type;
        $data->status = $req->status;
        $data->download_status = $req->downstatus;
        $data->resolution = $req->resolution;
        $data->storage_device = $req->storage;
        $data->note = $req->note;
        $data->save();
        return redirect()->route('home')->with('success-edit', $data->title);
    }

    public function deleteAnime($id)
    {
        $anime = Auth::user()->animes()->find($id);
        $title = $anime->title;
        $anime->delete();
        return redirect()->route('home')->with('success-delete', $title);
    }
}
