<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [ 'title' , 'type', 'about', 'attachment1', 'attachment2', 'attachment3' ];
    protected $guarded = [ 'id', 'update_at' ];
    protected $table = 'projects';
}
