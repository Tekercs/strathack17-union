<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function category()
    {
        return $this->hasOne('App\Categories');
    }
}
