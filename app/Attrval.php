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

}
