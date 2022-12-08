<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadKit;

class KitController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('kit');
    }

    public function store(Request $request)
    {
        $download_kit = DownloadKit::where('user_id', $request->user_id)->first();

        if ($download_kit == null) {
            return DownloadKit::create(['user_id' => $request->user_id]);
        }

        return $download_kit;
    }
}
