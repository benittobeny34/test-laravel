<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Comment extends Model
{
    
    protected $fillable = ['comment','post_id','commented_by'];

	 public function getCreatedAtAttribute($value)
	    {
	        $date = Carbon::parse($value);
	        return $date->diffForHumans();
	    }
    
}
