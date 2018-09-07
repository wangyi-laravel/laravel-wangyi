<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function attr()
    {
    	return $this->belongsTo('App\Attr');
    }

    public function attrvals()
    {
    	return $this->hasMany('App\Attrval');
    }

    public function cate()
    {
    	return $this -> belonds('App\Cates');
    }
}
