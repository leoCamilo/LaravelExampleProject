<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [ 'title' , 'content', 'img_url', 'created_at' ];
    protected $guarded = [ 'id', 'update_at' ];
    protected $table = 'news';
}