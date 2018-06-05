<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\VideoLesson;

class VideoLessonsController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy', 'change_visibility'); }
    
    public function index()
    {
        return view('pages/academic/list_video_lessons', 
        [
            'name' => 'Vídeo Aulas',
            'videos' => VideoLesson::all()
        ]);
    }

    public function create()
    {
        return view('pages/academic/create_video_lesson', [ 'name' => 'Vídeo Aula' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|url|max:255',
            'premium' => 'sometimes'
        ]);

        $data['link'] = (int) substr(parse_url($data['link'], PHP_URL_PATH), 1);        
    
        tap(new VideoLesson($data))->save();
        return redirect('videolessons');
    }

    public function show($id) { }

    public function edit($id) { }

    public function update(Request $request, $id) { }

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