<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function path()
    {
        return '/threads/' . $this->id;
    }

    public function scopeLatestPublished($query)
    {
        return $this::latest()->take(8)->get();
    }
}
