<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function category()
    {
        return $this->hasOne('App\Categories', 'id', 'categoryId');
    }

    public function scopeSearch($query, $key)
    {
        return $query->where("title", "LIKE", "%".$key."%")
                     ->orWhere("content", "LIKE", "%".$key."%")
                     ->orWhere("breef", "LIKE" ,"%".$key."%");
    }
}
