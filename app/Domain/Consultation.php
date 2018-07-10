<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [ 'title', 'link', 'type' ];
    protected $table = 'consultations';
}