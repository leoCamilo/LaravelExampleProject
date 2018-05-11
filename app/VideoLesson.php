<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoLesson extends Model
{
    protected $fillable = [ 'title' , 'link' ];
    protected $guarded = [ 'id', 'update_at' ];
    protected $table = 'video_lessons';
}
