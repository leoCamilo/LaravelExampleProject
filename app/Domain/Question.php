<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [ 'question', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5', 'correct', 'quiz_id' ];
    protected $table = 'questions';
}