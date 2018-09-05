<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attrval extends Model
{
    //
    public function attr()
    {
    	return $this->belongsTo('App\Attr');
    }

    public function good()
    {
    	return $this->belongsTo('App\Good');
    }

}
