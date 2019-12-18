<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path'];
    protected $url = "/images/";


    public function getPathAttribute($value){
        return $this->url . $value;
    }
}
