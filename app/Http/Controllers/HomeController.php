<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		// return view('home');
		$data = Main::all();
		$watched = Main::where('status', 2)->count();
		$watching = Main::where('status', 1)->count();
		$complete = Main::where('download_status', 2)->count();
		$process = Main::where('download_status', 1)->count();
		return view('index', ['data' => $data, 'home' => true, 'watched' => $watched, 'watching' => $watching, 'complete' => $complete, 'process' => $process,'page'=>'Dashboard']);
	}

	public function watchWatching() {
		$data = Main::where('status', 1)->get();
		return view('index', ['data' => $data,'page'=>'Watching Anime']);
	}

	public function watchWatched() {
		$data = Main::where('status', 2)->get();
		return view('index', ['data' => $data,'page'=>'Watched Anime']);
	}

	public function watchPlan() {
		$data = Main::where('status', 3)->get();
		return view('index', ['data' => $data,'page'=>'Plan to Watch Anime']);
	}

	public function watchHold() {
		$data = Main::where('status', 4)->get();
		return view('index', ['data' => $data,'page'=>'On hold Anime']);
	}

	public function watchDrop() {
		$data = Main::where('status', 5)->get();
		return view('index', ['data' => $data,'page'=>'Dropped Anime']);
	}

	public function watchNo() {
		$data = Main::where('status', 6)->get();
		return view('index', ['data' => $data, 'page'=>'No Anime']);
	}

    public function downloadComplete() {
        $data = Main::where('download_status', 2)->get();
        return view('index', ['data' => $data,'page'=>'Completed Download Anime']);
    }

    public function downloadProcess() {
        $data = Main::where('download_status', 1)->get();
        return view('index', ['data' => $data,'page'=>'On Process Anime']);
    }

    public function downloadPlan() {
        $data = Main::where('download_status', 3)->get();
        return view('index', ['data' => $data,'page'=>'Plan to Download Anime']);
    }

    public function downloadNo() {
        $data = Main::where('download_status', 4)->get();
        return view('index', ['data' => $data,'page'=>'No Download Anime']);
    }
}
