<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Domain\Question;

class StudiesController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('get_all', 'destroy'); }
    
    public function index()
    {
        return view('pages/academic/list_quiz', [
            'name' => 'Estudos',
            'questions_count' => DB::table('questions')
                ->select(DB::raw('type, count(type) as type_count'))
                ->groupBy('type')
                ->get()
        ]);
    }

    public function get_all($id)
    {
        return Question::where('type', '=', $id)->get();
    }

    public function create()
    {
        return view('pages/academic/create_study', [ 'name' => 'Estudo' ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate ([
            'correct'   => 'required',
            'question'  => 'required',
            'answer_1'  => 'required',
            'answer_2'  => 'required',
            'answer_3'  => 'required',
            'answer_4'  => 'required',
            'answer_5'  => 'required',
            'type'      => 'required',
        ]);
        
        tap(new Question($data))->save();
        
        return redirect('study');
    }

    public function show($id)
    {
        return view('pages/academic/list_questions',
        [
            'name' => 'Estudo',
            'questions' => Question::where('type', '=', $id)->get()
        ]);
    }

    public function show_question($id)
    {
        return view('pages/academic/edit_question', 
        [
            'name' => 'Estudo',
            'question' => Question::find($id)
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate ([
            'correct'   => 'required',
            'question'  => 'required',
            'answer_1'  => 'required',
            'answer_2'  => 'required',
            'answer_3'  => 'required',
            'answer_4'  => 'required',
            'answer_5'  => 'required',
            'type'      => 'required',
        ]);

        $question = Question::find($id);
        $question->type = $data['type'];
        $question->correct = $data['correct'];
        $question->question = $data['question'];
        $question->answer_1 = $data['answer_1'];
        $question->answer_2 = $data['answer_2'];
        $question->answer_3 = $data['answer_3'];
        $question->answer_4 = $data['answer_4'];
        $question->answer_5 = $data['answer_5'];
        $question->save();

        return redirect('study/'.$data['type']);
    }

    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        
        return response()->json([ 'success' => 'true' ]);
    }
}
