<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class AddController extends Controller {
	public function display() {
		return view('create');
	}

	public function insertNewAnime(Request $req) {
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
