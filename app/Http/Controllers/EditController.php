<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;

class EditController extends Controller
{

    public function detail($id)
    {
        $data = Main::find($id);
        // dd($data->airing_until);
        return view('edit',['anime'=>$data]);
    }
}
