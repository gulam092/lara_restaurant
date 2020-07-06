<?php

namespace App;
use App\Food;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];
    
    public function food()
    {
    return $this->hasOne('App\Food','category_id','id');
    }
}
