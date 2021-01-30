<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $data = $user->animes;
        $watched = $user->animes()->where('status', 2)->count();
        $watching = $user->animes()->where('status', 1)->count();
        $complete = $user->animes()->where('download_status', 2)->count();
        $process = $user->animes()->where('download_status', 1)->count();
        return view('index', ['data' => $data, 'home' => true, 'watched' => $watched, 'watching' => $watching, 'complete' => $complete, 'process' => $process, 'page' => 'Dashboard']);
    }

    public function animeIndex(Request $request)
    {
        $type = $request->query('type');
        $status = $request->query('status');
        $download = $request->query('download');
        $res = $request->query('res');
        $storage = $request->query('storage');

        if (!is_null($type)) {
            $data =  Auth::user()->animes()->where('type', $type)->get();
            switch ($type) {
                case '1':
                    $page = 'TV';
                    break;
                case '2':
                    $page = 'OVA';
                    break;
                case '3':
                    $page = 'ONA';
                    break;
                case '4':
                    $page = 'OAD';
                    break;
                case '5':
                    $page = 'Movie';
                    break;
                case '6':
                    $page = 'Special';
                    break;
                case '7':
                    $page = 'BD';
                    break;
                case '8':
                    $page = 'OVA & BD';
                    break;
                case '9':
                    $page = 'ONA & BD';
                    break;
                case '10':
                    $page = 'OAD & BD';
                    break;
                case '11':
                    $page = 'Movie & BD';
                    break;
                case '12':
                    $page = 'Special & BD';
                    break;
                default:
                    $page = 'Unknown Type';
                    break;
            }
        } else if (!is_null($status)) {
            $data = Main::where('status', $status)->get();
            switch ($status) {
                case '1':
                    $page = 'Watching';
                    break;
                case '2':
                    $page = 'Watched';
                    break;
                case '3':
                    $page = 'Plan to Watch';
                    break;
                case '4':
                    $page = 'On hold';
                    break;
                case '5':
                    $page = 'Dropped';
                    break;
                case '6':
                    $page = 'No Watch';
                    break;
                default:
                    $page = 'Unknown Status';
                    break;
            }
        } else if (!is_null($download)) {
            $data = Main::where('download_status', $download)->get();
            switch ($download) {
                case '1':
                    $page = 'On Process';
                    break;
                case '2':
                    $page = 'Completed';
                    break;
                case '3':
                    $page = 'Plan to Download';
                    break;
                case '4':
                    $page = 'No Download';
                    break;
                default:
                    $page = 'Unknown Download';
                    break;
            }
        } else if (!is_null($res)) {
            $data = Main::where('resolution', $res)->get();
            switch ($res) {
                case '0':
                    $page = 'No Resolution (Not Yet Downloaded)';
                    break;
                case '1':
                    $page = '240p';
                    break;
                case '2':
                    $page = '360p';
                    break;
                case '3':
                    $page = '480p';
                    break;
                case '4':
                    $page = '720p';
                    break;
                case '5':
                    $page = '1080p';
                    break;
                case '6':
                    $page = 'Else Resolution';
                    break;
                default:
                    $page = 'Unknown Resolution';
                    break;
            }
        } else if (!is_null($storage)) {
            $data = Main::where('storage_device', $storage)->get();
            switch ($storage) {
                case '0':
                    $page = 'No Storage (Not Yet Downloaded)';
                    break;
                case '1':
                    $page = 'MS-1 Storage';
                    break;
                case '2':
                    $page = 'Harddisk Ext 1 (250 GB) Storage';
                    break;
                case '3':
                    $page = 'Laptop Storage';
                    break;
                case '4':
                    $page = 'Harddisk Ext 2 (4 TB) Storage';
                    break;
                default:
                    $page = 'Unknown Storage';
                    break;
            }
        } else {
            $page = 'All';
            $data = Main::all();
        }

        return view('index', ['data' => $data, 'page' => $page . ' Anime']);
    }
}
