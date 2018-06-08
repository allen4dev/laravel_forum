<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
