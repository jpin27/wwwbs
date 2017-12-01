<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // sets the relationship between a Role and a User: a Role can be assigned to many Users
    public function users()
	{
  		return $this->belongsToMany(User::class);
	}
}
