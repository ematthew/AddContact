<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class contact extends Model
{
    public function user()
    {
    	return $this->belongsTo(user::class);
    }
}
