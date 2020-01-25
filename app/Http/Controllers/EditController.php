<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class EditController extends Controller {

	public function detail($id) {
		$data = Main::find($id);
		return view('edit', ['anime' => $data]);
	}

	public function update(Request $req, $id) {
		if (($req->downstatus != 1 && $req->downstatus != 2) && ($req->resolution != 0 || $req->storage != 0)) {
			return back()->with('download-alert', 'Before you can set Resolution and Storage Device, please set Download Status to "On Process" or "Completed"')->withInput();
		}
		$data = Main::find($id);
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
}
