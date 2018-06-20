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
        $this->favorites()->create([
            'user_id' => auth()->id(),
        ]);
    }
}
