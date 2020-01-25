<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class AddController extends Controller {
	public function display() {
		return view('create');
	}

	public function insertNewAnime(Request $req) {
		if (($req->downstatus != 1 && $req->downstatus != 2) && ($req->resolution != 0 || $req->storage != 0)) {
			return back()->with('download-alert', 'Before you can set Resolution and Storage Device, please set Download Status to "On Process" or "Completed"')->withInput();
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
		$data->save();
		return redirect()->route('home')->with('anime-name', $data->title);
	}
}
