<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = []; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function path()
    {
        return '/threads/' . $this->id;
    }

    public function scopeLatestPublished($query)
    {
        return $this::latest()->take(8)->get();
    }

    public function addReply($body)
    {
        $this->replies()->create([
            'body' => $body,
            'user_id' => auth()->id(),
        ]);
    }
}
