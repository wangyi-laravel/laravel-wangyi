<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function attrs()
    {
    	return $this->belongsToMany('App\Attr');
    }

    public function attrvals()
    {
    	return $this->belongsTo('App\Attrval');
    }
}
