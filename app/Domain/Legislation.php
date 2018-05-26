<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Legislation extends Model
{
    protected $fillable = [ 'title' , 'url', 'type' ];
    protected $table = 'legislations';
}
