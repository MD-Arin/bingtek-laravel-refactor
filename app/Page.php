<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = array('page');
    
    public function contents(){
       return $this->hasMany('App\Content');
    }
}
