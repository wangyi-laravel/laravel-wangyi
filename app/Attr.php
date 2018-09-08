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

    public function goods()
    {
    	return $this->hasMany('App\Good');
    }

    public function cate()
    {
    	return $this->belongsTo('App\Cates');
    }
}
