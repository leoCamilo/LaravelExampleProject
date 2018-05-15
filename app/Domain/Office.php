<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [ 'content' ];
    protected $table = "offices";
}
