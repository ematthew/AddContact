<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Nicolaslopezj\Searchable\SearchableTrait;

class contact extends Model
{

	use SearchableTrait;

    protected $searchable =[
        'columns' => [
            'contacts.first_name' => 150,
            'contacts.last_name' => 5,
            'contacts.email' => 3,
        ]
    ];

    public $fillable = [
        'first_name', 'last_name', 'email',
    ];

    public function user()
    {
    	return $this->belongsTo(user::class);
    }
}
