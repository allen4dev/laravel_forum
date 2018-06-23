<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\RecordsActivity;

class Reply extends Model
{
    use RecordsActivity;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function favorite()
    {
        $attributes = [ 'user_id' => auth()->id() ];

        if (! $this->isFavorited($attributes) ) {
            return $this->favorites()->create($attributes);
        }
    }

    public function unfavorite()
    {
        $attributes = [ 'user_id' => auth()->id() ];

        if ($this->isFavorited($attributes) ) {
            return $this->favorites()->where($attributes)->delete();
        }
    }

    public function isFavorited($attributes)
    {
        return !! $this->favorites()->where($attributes)->exists();
    }
}
