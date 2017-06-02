<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     *
     */

    public function faculties()
    {

        return $this->belongsToMany(Faculty::class);
    }
}
