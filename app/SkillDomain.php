<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillDomain extends Model
{
    // Needs to be mentioned  otherwise it will be expecting  skill_domains
    protected $table = 'skilldomains';

    protected $fillable = ['name'];


    public function softwareHouses(){

        return $this->belongsToMany(SoftwareHouse::class);

    }
}
