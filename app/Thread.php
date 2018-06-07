<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function scopeLatestPublished($query)
    {
        return $this::latest()->take(8)->get();
    }
}
