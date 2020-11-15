<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryEvent extends Model
{
    public function pictures(){

        return $this->hasMany('App\Picture');
        
    }
}
