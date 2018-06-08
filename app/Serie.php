<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function serie()
    {
        return $this->belongsTo(Skill::class);
    }
}
