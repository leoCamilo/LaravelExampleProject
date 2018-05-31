<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class LegalAdvice extends Model
{
    protected $fillable = [ 'user_id' , 'link', 'title' ];
    protected $table = 'legal_advices';
}