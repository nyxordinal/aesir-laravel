<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index()
    {
        $active = 'active';
        $title  = 'ADD';
        return view('add', ['estatus' => '', 'hstatus' => '', 'astatus' => $active, 'title' => $title]);
    }
}
