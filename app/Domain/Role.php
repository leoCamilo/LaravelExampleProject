<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [ 'name', 'content' ];
    protected $table = "roles";
}