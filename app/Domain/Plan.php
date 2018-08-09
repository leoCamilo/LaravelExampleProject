<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [ 'title', 'value' ];
    protected $table = "plans";
}