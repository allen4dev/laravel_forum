<?php

namespace App\Filters;

class ThreadsFilter extends QueryFilter {

    public function title($value)
    {
        return $this->query->where('title', 'like', "%{$value}%");
    }

    public function skill($skill)
    {
        return $this->query->where('skill_id', $skill);
    }

}