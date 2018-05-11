<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VideoLesson;

class VideoLessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/academic/list_video_lessons', 
        [
            'name' => 'Vídeo Aulas',
            'videos' => VideoLesson::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/academic/create_video_lesson', [ 'name' => 'Vídeo Aula' ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|url|max:255'
        ]);

        $data['link'] = (int) substr(parse_url($data['link'], PHP_URL_PATH), 1);        
    
        tap(new VideoLesson($data))->save();
        return redirect('videolessons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = VideoLesson::find($id);
        $video->delete();

        return response()->json([ 'success' => 'true' ]);
    }

    public function change_visibility($id)
    {
        $video = VideoLesson::find($id);
        $video->visible = !$video->visible;
        $video->save();
    }
}