<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoftwareHouse extends Model
{

// Needs to be mentioned  otherwise it will be expecting  skill_domains
    protected $table = 'softwarehouses';

    protected $fillable = ['name', 'desc', 'url'];


    public function skills()
    {

        return $this->belongsToMany(SkillDomain::class, 'skilldomain_softwarehouse', 'skilldomain_id', 'softwarehouse_id')->withTimestamps();
    }
}
