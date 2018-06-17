<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Filters\QueryFilter;

use App\Activity;

class Thread extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        static::created(function ($model) {
            $model->activities()->create([
                'user_id' => auth()->id(),
                'type' => 'created_thread',
            ]);
        });
    }

    public function activities()
    {
        return $this->morphMany(Activity::class, 'subject');
    }

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
