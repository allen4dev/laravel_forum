<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Filters\QueryFilter;

use App\RecordsActivity;

use App\Activity;

class Thread extends Model
{
    use RecordsActivity;

    protected $guarded = [];

    public function scopeSearch($query, QueryFilter $filter)
    {
        return $filter->apply($query);
    }

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

    public function addReply($reply)
    {
        $this->replies()->create([
            'body' => $reply['body'],
            'user_id' => auth()->id(),
        ]);
    }
}
