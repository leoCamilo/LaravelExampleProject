<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [ 'title', 'img_url' ];
    protected $table = "awards";
}
