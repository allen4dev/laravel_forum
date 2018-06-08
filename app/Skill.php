<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function path()
    {
        return '/skills/' . $this->id;
    }
}
