<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class PracticalGuide extends Model
{
    protected $fillable = [ 'title', 'link', ];
    protected $table = "practical_guides";
}
