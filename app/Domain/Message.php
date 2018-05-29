<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [ 'message', 'from', 'to' ];
    protected $table = 'messages';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}