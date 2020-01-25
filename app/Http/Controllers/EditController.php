<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;

class EditController extends Controller
{

    public function detail($id)
    {
        $data = Main::find($id);
        return view('edit',['anime'=>$data]);
    }

    public function update(Request $req, $id)
    {
    	$data=Main::find($id);
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
		return back()->withInput();
    }
}
