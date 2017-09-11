<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = array('title', 'description', 'user_id');

    public function user() {
        return $this->belongsTo('App\User');
    }
}
