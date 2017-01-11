<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoftwareHouse extends Model
{


    public function skill_domains(){

        return $this->belongsToMany('App\SkillDomain');

    }
}
