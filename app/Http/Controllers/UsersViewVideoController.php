<?php

namespace App\Http\Controllers;

use App\Models\UsersViewVideo;
use Illuminate\Http\Request;

/**
 * Class UsersViewVideoController
 * @package App\Http\Controllers
 */
class UsersViewVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersViewVideos = UsersViewVideo::paginate();

        return view('users-view-video.index', compact('usersViewVideos'))
            ->with('i', (request()->input('page', 1) - 1) * $usersViewVideos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersViewVideo = new UsersViewVideo();
        return view('users-view-video.create', compact('usersViewVideo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsersViewVideo::$rules);

        $view_register = UsersViewVideo::where('user_id', $request->user_id)->where('slug_video', $request->slug_video)->first();

        if($view_register == null) {
            return UsersViewVideo::create(['user_id' => $request->user_id, 'slug_video' => $request->slug_video, 'points' => 20]);
        }

        return $view_register;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersViewVideo = UsersViewVideo::find($id);

        return view('users-view-video.show', compact('usersViewVideo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersViewVideo = UsersViewVideo::find($id);

        return view('users-view-video.edit', compact('usersViewVideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsersViewVideo $usersViewVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersViewVideo $usersViewVideo)
    {
        request()->validate(UsersViewVideo::$rules);

        $usersViewVideo->update($request->all());

        return redirect()->route('users-view-videos.index')
            ->with('success', 'UsersViewVideo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usersViewVideo = UsersViewVideo::find($id)->delete();

        return redirect()->route('users-view-videos.index')
            ->with('success', 'UsersViewVideo deleted successfully');
    }
}
