<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class VideoLesson extends Model
{
    protected $fillable = [ 'title' , 'link', 'premium' ];
    protected $guarded = [ 'id', 'update_at' ];
    protected $table = 'video_lessons';
}
