<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = array('pages_id', 'section', 'body');

    public function page(){
      return $this->belongsTo('App\Page');
    }
}
