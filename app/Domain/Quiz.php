<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [ 'title' ];
    protected $table = 'quizzes';

    public function questions()
    {
        return $this->hasMany('App\Domain\Question');
    }
}
