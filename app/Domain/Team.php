<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [ 'content' ];
    protected $table = "teams";
}
