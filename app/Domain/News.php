<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [ 'title' , 'content', 'img_url' ];
    protected $guarded = [ 'id', 'update_at' ];
    protected $table = 'news';
}