<?php

namespace App\Http\Controllers\Academic;

use App\Domain\AudioLesson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudioLessonController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('destroy', 'getAllAudios'); }

    public function getAllAudios()
    {
        return AudioLesson::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/academic/list_audio_lessons', 
        [
            'name' => 'Áudio Aulas',
            'audios' => AudioLesson::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/academic/create_audio_lesson', [ 'name' => 'Áudio Aula' ]);
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
            'link' => 'required',
            'premium' => 'sometimes'
        ]);

        // $data['link'] = (int) substr(parse_url($data['link'], PHP_URL_PATH), 1);        
    
        tap(new AudioLesson($data))->save();
        return redirect('audiolessons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AudioLesson  $audioLesson
     * @return \Illuminate\Http\Response
     */
    public function show(AudioLesson $audioLesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AudioLesson  $audioLesson
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioLesson $audioLesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AudioLesson  $audioLesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AudioLesson $audioLesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AudioLesson  $audioLesson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $audio = AudioLesson::find($id);
        $audio->delete();

        return response()->json([ 'success' => 'true' ]);
    }
}
