<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {
        $active = 'active';
        $title  = 'EDIT';
        return view('edit', ['estatus' => $active, 'hstatus' => '', 'astatus' => '', 'title' => $title]);
    }
}
