<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function path()
    {
        return "/users/" . $this->id;
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function publishThread($thread)
    {
        return Thread::create([
            'user_id'     => $this->id,
            'skill_id'    => $thread['skill_id'],
            'serie_id'    => $thread['serie_id'],
            'title'       => $thread['title'],
            'description' => $thread['description'],
            'body'        => $thread['body'],
        ]);
    }
}
