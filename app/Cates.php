<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
    //
    public function child()
    {
    	return $this->hasMany('App\Cates','parent_id');
    }
}
