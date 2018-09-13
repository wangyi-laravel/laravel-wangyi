<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function colors()
    {
    	return $this->belongsToMany('App\Color');
    }

    public function sizes()
    {
    	return $this->belongsToMany('App\Size');
    }

    public function cate()
    {
    	return $this -> belongsTo('App\Cates');
    }

    public function user()
    {
        return $this -> belongsTo('App\User');
    }

    public function comment()
    {
        return $this->hasMany('APP\Comment');
    }
}
