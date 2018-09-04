<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    //
    public function attrvals()
    {
    	return $this->hasMany('App\Attrval');
    }
}
