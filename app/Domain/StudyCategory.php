<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class StudyCategory extends Model
{
    protected $fillable = [ 'title', 'img_url' ];
    protected $table = "study_categories";
}
