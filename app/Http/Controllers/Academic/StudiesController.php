<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Question;
use App\Domain\Quiz;

class StudiesController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('get_all'); }
    
    public function index()
    {
        return view('pages/academic/list_quiz', [
            'name' => 'Estudo',
            'quizzes' => Quiz::all()
        ]);
    }

    public function get_all()
    {
        $quizes = Quiz::all();
        
        foreach ($quizes as $quiz) {
            $quiz['questions'] = Question::where('quiz_id', '=', $quiz['id'])->get();
        }
        
        return $quizes;
    }

    public function create()
    {
        return view('pages/academic/create_study', [ 'name' => 'Estudo' ]);
    }

    public function store(Request $request)
    {
        $question_idx = 0;
        $quiz = new Quiz;
        $quiz->title = $request['title'];
        $quiz->save();

        while (isset($request["content_" . ++$question_idx])) {
            $question_data = [
                'correct'       => $request['correct_opt_'.$question_idx],
                'question'      => $request['content_'.$question_idx],
                'answer_1'      => $request['answer1_'.$question_idx],
                'answer_2'      => $request['answer2_'.$question_idx],
                'answer_3'      => $request['answer3_'.$question_idx],
                'answer_4'      => $request['answer4_'.$question_idx],
                'answer_5'      => $request['answer5_'.$question_idx],
                'quiz_id'    => $quiz->id
            ];

            tap(new Question($question_data))->save();
        }

        return redirect('study');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
