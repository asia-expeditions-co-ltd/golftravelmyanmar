<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $table = 'tbl_slide';

    public function web(){
    	return $this->belongsToMany(Web::class);
    }
    
}