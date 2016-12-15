<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;

class ChatMessage extends Model
{
    use SerializesModels;

    public $fillable = ['user_id', 'message'];
}
