<?php

namespace App\Http\Controllers\admin;

use App\admin\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Self_;

class VideoController extends Controller
{

    //    path to the resource view
    const VIEW = "admin.videos";

//   Resource route
    const ROUTE = "admin/videos";

//    Resource Title
    const TITLE = "Videos";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Video::orderBy("id", "Desc")->paginate(5000);
        $route = self::ROUTE;
        $title = self::TITLE;
        return view(self::VIEW . ".index", compact("data", "route", "title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route = self::ROUTE;
        $title = self::TITLE;
        $action = "Create";
        return view(self::VIEW . ".create", compact("route", "title", "action"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:190',
            'video' => 'required|max:5000', // just in case 5000
        ]);

        $video = new Video();
        $video->title = $request->title;
        $video->video = $request->video;
        $video->video_id = $request->video_id;
        $video->save();

        return redirect(self::ROUTE);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $route = self::ROUTE;
        $title = self::TITLE;
        $action = "Edit";
        return view(self::VIEW . ".create", compact("route", "title", "action", 'video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|max:190',
            'video' => 'required|max:5000', // just in case 5000
        ]);

        $video->title = $request->title;
        $video->video = $request->video;
        $video->video_id = $request->video_id;
        $video->save();

        return redirect(self::ROUTE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect(self::ROUTE);
    }
}
