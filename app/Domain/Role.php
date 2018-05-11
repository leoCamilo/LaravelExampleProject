<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [ 'name' ];
    protected $table = "roles";
}