<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class MessageCenter extends Model
{
    protected $fillable = [ 'user_id', 'unreaded_msgs' ];
    protected $table = "message_centers";
}
