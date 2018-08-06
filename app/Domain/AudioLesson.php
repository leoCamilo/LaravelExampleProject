<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class AudioLesson extends Model
{
    protected $fillable = [ 'title', 'link', 'premium' ];
    protected $table = "audio_lessons";
}