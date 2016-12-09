<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

public function comments(){
    return $this->hasMany('App\Comments');
}


}

