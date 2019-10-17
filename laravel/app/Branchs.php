<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branchs extends Model
{
           public function Zone()
    {
        return $this->belongsTo('App\zone', 'zone_id');
    }
}
