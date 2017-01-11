<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillDomain extends Model
{
    //


    public function SoftwareHouse(){

        return $this->belongsToMany('App\SoftwareHouse');

    }
}
