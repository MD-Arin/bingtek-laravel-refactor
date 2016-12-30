<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function contents(){
       return $this->hasMany('App\Content');
    }
}
