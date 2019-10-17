<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
        public function Branchs()
    {
        return $this->hasMany('App\Branchs');
    }}
