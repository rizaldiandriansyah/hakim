<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    protected $table = 'biodata';

    public function User()
	{
		return $this->belongsTo('App\User');
	}
}
