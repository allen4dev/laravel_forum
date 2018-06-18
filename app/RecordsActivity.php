<?php
namespace App;

use App\Activity;

trait RecordsActivity {
    public static function bootRecordsActivity()
    {
        static::created(function ($model) {
            $model->activities()->create([
                'user_id' => auth()->id(),
                'type' => 'created_' . strtolower((new \ReflectionClass($model))->getShortName()),
            ]);
        });
    }

    public function activities()
    {
        return $this->morphMany(Activity::class, 'subject');
    }
}