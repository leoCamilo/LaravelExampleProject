<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class SupportContent extends Model
{
    protected $fillable = [ 'title', 'link', 'type', 'premium' ];
    protected $table = "support_contents";
}