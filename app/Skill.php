<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function series()
    {
        return $this->hasMany(Serie::class);
    }

    public function path()
    {
        return '/skills/' . $this->id;
    }
}
